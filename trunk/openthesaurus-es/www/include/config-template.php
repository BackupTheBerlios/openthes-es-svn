<?php
# Please copy this file to "config.php" and then modify it
# in order to match your settings.

$htmlcharset = "iso-8859-1"; # set HTTP charset

# local:
$_PHPLIB = array();
$_PHPLIB["libdir"] = "/srv/svn-openthes-es/trunk/openthesaurus-es/www/include/phplib/";

define('BASE_URL', "");               # no trailing slash, "" if the site is in the root
define('LOCALE_DIR', "/srv/svn-openthes-es/trunk/openthesaurus-es/www/include/locale");
define('ROOT_DIR', "/srv/svn-openthes-es/trunk/openthesaurus-es/www");

if (!defined('ADMIN_IP'))
{
define('DB_HOST', "localhost");
define('DB_NAME', "tesauro");
define('DB_USER', "root");
define('DB_PASSWORD', "");
# the server this script runs on:
#define('ADMIN_IP', "123.123.123.123");

# Speeds up similarity and substring search by using an in-memory
# database.
# NOTE: requires that admin/recreate-mem-db.php is called regularly,
# new words will only be found after that script is called.
define('MEMORY_DB', 0);

# Use "overview.php" or "synset.php"
# overview.php: when searching, always show the overview page 
# synset.php: when searching, show the synset.php if there's exactly
# one match, show multimatch.php if there are more matches and show
# suggestions.php if there'e no match: 
define('DEFAULT_SEARCH', "synset.php");
# Whether to display the superordinate synsets in overview.php:
define('SUPERSETS_IN_OVERVIEW', 1);

# Used for visible dates (e.g. statistics, automatically generated
# files etc). Leave empty to use the server's default timezone:
define('TIMEZONE', "CET");		# this just sets the 'TZ' environment variable
define('TIMEFORMAT', "Y-m-d H:i");		# used for statistics
define('TIMEFORMAT_SHORT', "Y-m-d");	# used for download file dates

# for suggestp.php:
define('SUGGEST_EMAIL', "marcelo.garrone@gmail.com");
define('SUGGEST_SUBJECT', "OpenThesaurus web form");

# People can join a mailing list when they register at this site.
# Send the "subscribe" email to this address (set to '' to disable 
# this feature):
define('MAILING_LIST_SUBSCRIBE','openthes-es-general-request@lists.berlios.de');

# Offer users to set superordinate and subordinate concepts?
define('ONTOLOGY', 1);
# Only if ONTOLOGY is activated:
# Name and ID of the synset that's the superoridinate meaning to
# all other (noun) synsets (set TOP_SYNSET_ID to -1 if you don't use this):
define('TOP_SYNSET_NAME', "a noun");	# not used yet
define('TOP_SYNSET_ID', 17626);
define('TOP_SYNSET_NAME_VERB', "a verb");	# not used yet
define('TOP_SYNSET_ID_VERB', 18397);
define('TOP_SYNSET_NAME_ADJ', "an adjective");	# not used yet
define('TOP_SYNSET_ID_ADJ', -1);
# Offer users to set associated concepts?
#define('ASSOCIATIONS', 1);

# Whether the homepage should offer a link that let's the user switch to an English
# language user interface:
define('DISPLAY_LANGUAGE_LINK', 1);

# show a warning sign if a synset contains only one term and no links to
# super/subordinate synsets:
define('WARN_SMALL_SYNSETS', 1);

# maximum number of words per synset:
define('MAX_WORDS_PER_SYNSET', 15);

# Should the statistics on the homepage be updated every time the
# page is loaded? Setting this to 0 makes the page load slightly faster,
# but it requires you to set up a cronjob that prints stats.php
# to stats_output.html regularly:
define('REALTIME_STATS_UPDATE', 1);

# Ask even the admin for a comment when he deletes a whole synset?
define('ADMIN_DELETE_COMMENT', 1);

# Language of the web pages (requires translation files in include/locale/...):
define('WEB_LANG', "es_ES");

# Thesaurus language (not the web pages):
define('LANGUAGE', 'Spanish');

# Information about the administrator:
define('EMAIL', 'marcelo.garrone@gmail.com');	# displayed in bottom.php
define('DOMAIN', 'openthes-es.berlios.de');
define('HOMEPAGE', "http://openthes-es.berlios.de");
# Copyright of the data:
define('COPYRIGHT',"Copyleft (C) 2007 Marcelo Garrone <marcelo.garrone@gmail.com>");

define('TARGET_DOWNLOAD', "download/");
define('TARGET_DOWNLOAD_DIR', "download/");
define('TARGET_KWORD', "Kword_thesaurus_es_ES.txt");
define('TARGET_TEXT', "Thesaurus_es_ES.txt");
define('TARGET_OOO', "OOo-thes_es_ES.tar.bz2");
define('TARGET_OOO2', "OOo2-thes_es_ES.tar.bz2");
define('TARGET_OOO3', "Spanish-Dictionaries.oxt");
define('TARGET_SOURCE', "openthesaurus-es_src.tar.bz2");

define('HIDDEN_SYNSETS', "-1");

define('KEYWORDS', "<meta name='keywords' content='thesaurus, synonyms, tesauro, sinónimos, diccionario, español, castellano, openoffice' />");

# Set to 1 if you want word_detail.php to be accessible
# without being logged in. This is basically only useful if
# getWordForms() returns results (see tool.php):
define('WORD_DETAIL_WITHOUT_AUTH', 0);

define('LICENSE', "# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or (at
# your option) any later version.\n");

define('LICENSE_WEB', "<a href='http://www.gnu.org/copyleft/gpl.html'>GNU General Public License (GPL)</a>. OpenThesaurus reserves the right to additionally publish the data under any other <a href='http://www.opensource.org/docs/definition.php'>Open Source License (OSI definition)</a>.");

# Spellchecker used in include/spellcheck.php (included form overview.php):
define('SPELLCHECK_EXE',"/path/to/hunspell");
# hunspell's dictionary dicrectory, .dic and .aff will be appended to this string:
define('SPELLCHECK_DICT_BASE',"/path/to/dict/de_DE");

# Only used in admin/import_wiktionary.php,
# Get the dumps at http://dumps.wikimedia.org:
define('WIKTIONARY_XML', "/path/to/dewiktionary-latest-pages-articles.xml");
# Only Wiktionary entries with this string will be imported:
define('WIKTIONARY_LANG', "Spanish");

# set this to 1 to convert the texts written to the export files from utf8 to latin1:
define('UTF8_DATABASE', 0);

### NOTE ###
# Also see www/admin/ooo_export.php and www/admin/ooo_new_export.php for more options

}

?>
