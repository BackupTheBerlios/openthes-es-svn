<?php
if( WEB_LANG == 'de_DE' ) {
	# server move:
	if( preg_match("/thesaurus\.kdenews\.org/", $_SERVER['HTTP_HOST']) ) {
		$new_url = "http://www.openthesaurus.de".$_SERVER['REQUEST_URI'];
		if( preg_match("/\?/", $_SERVER['REQUEST_URI']) ) {
			$new_url .= "&domainmove=1";
		} else {
			$new_url .= "?domainmove=1";
		}
		header("Location: $new_url");
		exit;
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html>
<head>
	<?php
	$head_title = "";
	if( isset($title) ) {
		$head_title = $title;
		$head_title = preg_replace("/<.*?>/", "", $title);		# no HTML in head's title element
	}
	if( isset($login_page) && $login_page == 1 ) {
		print "<title>"._("OpenThesaurus - German Thesaurus - Login")."</title>\n";
		$title = _("OpenThesaurus - German Thesaurus - Login");
		print KEYWORDS."\n";
	} else if( isset($page) && $page == "homepage" ) {
		print "<title>$head_title</title>\n";
		print KEYWORDS."\n";
		?>
		<script language="JavaScript" type="text/javascript">
		<!--
		function addEngine(name,ext,cat,pid)
		{
		  if ((typeof window.sidebar == "object") && (typeof window.sidebar.addSearchEngine == "function")) {
		    window.sidebar.addSearchEngine(
		      "http://mycroft.mozdev.org/install.php/" + pid + "/" + name + ".src",
		      "http://mycroft.mozdev.org/install.php/" + pid + "/" + name + "."+ ext, name, cat );
		  } else {
		    alert("You will need a browser which supports Sherlock to install this plugin.");
		  }
		}
		// -->
		</script>
		<?php
	} else {
		print "<title>$head_title</title>\n";
	}
	?>
	<?php
	if( isset($stop_robots) && $stop_robots == 1 ) {
		?>
		<meta name="robots" content="noindex,nofollow" />
	<?php } ?>
	<meta http-equiv="content-type" content="text/html; charset=<?php print $htmlcharset ?>" />
	<link href="<?php print BASE_URL ?>/include/styles.css" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="<?php print BASE_URL ?>/favicon.ico" />
	<?php if( isset($no_text_decoration) && $no_text_decoration == 1 ) { ?>
	<style type="text/css">
	<!--
		a:link {
			text-decoration: none;
		}
		a:visited {
			text-decoration: none;
		}
		a:hover {
			text-decoration: none;
			background-color: #dedede;
		}
		a:active {
			text-decoration: none;
		}
	-->
	</style>
	<?php } ?>
</head>
<body>

<?php
# server move:
if( WEB_LANG == 'de_DE' && array_key_exists('domainmove', $_GET) && $_GET['domainmove'] == 1 ) {
	?>
	<table style="background:#ff6e6e;">
	<tr>
		<td>OpenThesaurus ist umgezogen!
			Sie wurden automatisch auf www.openthesaurus.de umgeleitet.
			Bitte in Zukunft nur noch diese Adresse verwenden, da die alte
			Adresse (thesaurus.kdenews.org) m&ouml;glicherweise nicht mehr
			lange besteht.</td>
	</tr>
	</table>
<?php
}
?>

<table cellpadding="0" cellspacing="0" class="navtable">
<tr>
	<td>
		<form style="margin-top:3px;margin-bottom:3px;" action="<?php print DEFAULT_SEARCH ?>" method="get" name="searchform">
		<?php if( isset($page) && $page == "homepage" ) { ?>
			<strong>&nbsp;<?php print _("OpenThesaurus Home") ?></strong>
		<?php } else { ?>
			&nbsp;<a accesskey="h" href="<?php print BASE_URL ?>/"><?php print _("OpenThesaurus Home") ?></a>
		<?php } ?>
		<!--
	 	|
		<?php if( isset($page) && $page == "about" ) { ?>
			<strong>&Uuml;ber</strong>
		<?php } else { ?>
			<a href="<?php print BASE_URL ?>/about.php">&Uuml;ber</a>
		<?php } ?>
		-->	
	 	|
		<?php if( isset($page) && $page == "faq" ) { ?>
			<strong><?php print _("FAQ") ?></strong>
		<?php } else { ?>
			<a href="<?php print BASE_URL ?>/faq.php"><?php print _("FAQ") ?></a>
		<?php } ?>
		|
		<?php if( isset($page) && $page == "imprint" ) { ?>
			<strong><?php print _("Imprint") ?></strong>
		<?php } else { ?>
			<a href="<?php print BASE_URL ?>/imprint.php"><?php print _("Imprint") ?></a>
		<?php } ?>
		<?php if( !isset($page) || $page != "homepage" ) { ?>
		|
				<input type="hidden" name="search" value="1" />
				<?php print _("Search:") ?> <input accesskey="s" type="text" name="word" size="14" />
				<input type="submit" value="<?php print _("Go") ?>" />
		<?php } else { ?>
			&nbsp;
		<?php } ?>
		<?php if( isset($auth) && $auth->auth["uid"] != "nobody" ) { ?>
			<br /> &nbsp;
		<?php } ?>
		</form>
	</td>
	<td align="right">
	<?php

	// lang.php redirects to homepage, so show the
	// button only on the homepage to avoid confusion:
	// WARNING: code duplicated from include/phplib/prepend.php3
	
	$langs = array();
	array_push($langs, WEB_LANG);		// first = default
	array_push($langs, "en");

	if( isset($_COOKIE['thes_lang'])) {
		setlocale(LC_ALL, $_COOKIE['thes_lang']);
		$active_lang = $_COOKIE['thes_lang'];
	} else {
		$active_lang = $langs[0];
		setlocale(LC_ALL, $langs[0]);
	}

	if( strpos(getenv("SCRIPT_NAME"), "/index.php") > -1 && DISPLAY_LANGUAGE_LINK) {
		print _("Language: ");
		foreach($langs as $lang) {
			$lang_disp = $lang;
			if( strlen($lang) > 2 ) {
				$lang_disp = substr($lang, 0, 2);
			}
			if( $active_lang == $lang ) {
				print "<strong>$lang_disp</strong> ";
			} else {
				print "<a href=\"".BASE_URL."/lang.php?lang=$lang\">$lang_disp</a> ";
			}
		}
		if( isset($auth) ) {
			print " - ";
		}
	}
	?>

	<?php 
		if( isset($auth) && $auth->auth["uid"] != "nobody" ) {
			// TODO: use "perm"
			if( isset($auth) && $auth->auth['uname'] == 'admin' ){
				print "<a href=\"".BASE_URL."/admin/\">ADMIN</a> - ";
			}
			if( isset($auth) ) {
				print sprintf(_("Logged in as <span class=\"naviusername\">%s</span>"), $auth->auth['uname']);
				print "&nbsp;<br />";
				if( isset($page) && $page == "prefs" ) {
					print "<strong>"._("Preferences").'</strong>';
				} else {
					print "<a href=\"".BASE_URL."/prefs.php\">"._("Preferences").'</a>';
				}
			}
			print " - <a href=\"".BASE_URL."/logout.php?time=".time()."\">"._("Logout")."</a>";
		} else {
			if( isset($page) && $page == "login" ) {
				print "<strong>"._("Login")."</strong>";
			} else {
				print "<a href=\"".BASE_URL."/login.php\">"._("Login")."</a>";
			}
		}
	?>
	</td>
</tr>
</table>

<?php if (!(isset($disable_title) && $disable_title == 1)) { ?>
	<h1><?php print $title ?></h1>
<?php } ?>
