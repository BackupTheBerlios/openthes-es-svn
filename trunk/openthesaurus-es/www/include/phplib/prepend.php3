<?php
/*
 * Session Management for PHP3
 *
 * Copyright (c) 1998-2000 NetUSE AG
 *                    Boris Erdmann, Kristian Koehntopp
 *
 * $Id$
 *
 */ 
	
error_reporting(E_ALL);
list($usec, $sec) = explode(" ", microtime()); 
$time_start_tmp = ((float)$usec + (float)$sec);
# all configurations must be in config.php
include(dirname(__FILE__)."/../config.php");
if( TIMEZONE ) { 
	putenv("TZ=".TIMEZONE);
}

require($_PHPLIB["libdir"] . "db_mysql.inc");  /* Change this to match your database. */
require($_PHPLIB["libdir"] . "ct_sql.inc");    /* Change this to match your data storage container */
require($_PHPLIB["libdir"] . "session.inc");   /* Required for everything below.      */
require($_PHPLIB["libdir"] . "auth.inc");      /* Disable this, if you are not using authentication. */
require($_PHPLIB["libdir"] . "perm.inc");      /* Disable this, if you are not using permission checks. */
require($_PHPLIB["libdir"] . "user.inc");      /* Disable this, if you are not using per-user variables. */

/* Additional require statements go below this line */
# require($_PHPLIB["libdir"] . "menu.inc");      /* Enable to use Menu */

/* Additional require statements go before this line */

require($_PHPLIB["libdir"] . "local.inc");     /* Required, contains your local configuration. */

require($_PHPLIB["libdir"] . "page.inc");      /* Required, contains the page management functions. */

// define(PROJECT_DIR, realpath('./'));
// define(LOCALE_DIR, PROJECT_DIR .'../locale');
// define(DEFAULT_LOCALE, 'es_ES');
require($_PHPLIB["libdir"] . 'gettext.inc');

// dnaber:
// WARNING: also see include/top.php when you change something here:
$langs = array();
array_push($langs, WEB_LANG);		// first = default
array_push($langs, "de_DE");
array_push($langs, "en");

if( isset($_COOKIE['thes_lang'])) {
	$active_lang = $_COOKIE['thes_lang'];
	T_setlocale(LC_ALL, $active_lang);
} else {
	$active_lang = $langs[0];
	T_setlocale(LC_ALL, $langs[0]);
}

#You might need to comment this in to make utf-8 work:
#bind_textdomain_codeset('messages',"UTF-8");
$domain = 'messages';
T_bind_textdomain_codeset($domain, $htmlcharset);
T_bindtextdomain($domain,LOCALE_DIR);
T_textdomain($domain);
?>
