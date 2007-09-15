<?php
include("../include/phplib/prepend.php3");
$cancel_login = 1;
page_open(array("sess" => "Thesaurus_Session", "auth" => "Thesaurus_Default_Auth"));
include("../include/tool.php");
$db = new DB_Thesaurus;

$title = _("OpenThesaurus - German Thesaurus");
$page = "homepage";
include("../include/top.php");
?>

<p>OpenThesaurus ist ein Open-Source-Thesaurus für die deutsche Sprache. Jeder kann
mitmachen und z.B. einem Eintrag ein neues Synonym hinzufügen (siehe <a href="faq.php">FAQ</a>).</p>

<table border="0" cellpadding="2" cellspacing="5">
<tr>

	<td width="35%" align="left" bgcolor="#eeeeee" valign="middle">
		<form action="<?php print DEFAULT_SEARCH ?>" method="get" name="f">
			<input type="hidden" name="search" value="1" />
			<table border="0" align="left" cellspacing="0" cellpadding="2">
			<tr>
				<td><strong>&gt;&gt;<?php print _("Word") ?>:</strong></td>
				<td><input accesskey="s" type="text" size="18" name="word" value="" /></td>
				<td><?php print "<input type='submit' value='" . _("Search") . "' />" ?></td>
			</tr>
			<? if (strpos(DEFAULT_SEARCH, "synset") !== false) { ?>
			<tr>
				<td></td>
				<td colspan="2"><label class="myhover"><input type="checkbox" name="substring" />
					<?php print _("Find substrings") ?></label></td>
			</tr>
			<? } ?>
			<tr><td></td></tr>
			<tr>
				<td colspan="3">
					<a href="check.php?time=<?php print time() ?>"><strong>&gt;&gt;Synonyme prüfen</strong></a><br />
					<a href="tree.php"><strong>&gt;&gt;<?php print _("Tree view") ?></strong></a><br />
					<a href="top_users.php"><strong>&gt;&gt;<?php print _("Top 15 users") ?></strong></a>
				</td>
			</tr>
			
			<tr><td></td></tr>
			<tr>
				<td colspan="3">
					<a href="variation.php?lang=at"><strong>&gt;&gt;&Ouml;sterreichische W&ouml;rter</strong></a><br />
					<a href="variation.php?lang=ch"><strong>&gt;&gt;Schweizer W&ouml;rter</strong></a><br />
				</td>
			</tr>

			<tr><td></td></tr>
			<tr>
				<td colspan="3">
				<a href="javascript:addEngine('openthesaurus_de','png','Dictionaries','13033')">&gt;&gt; Firefox Such-Plugin installieren</a>
				<noscript>(Installation benötigt Javascript)</noscript>
				</td>
			</tr>
			<!--
			<tr><td></td></tr>
			<tr>
				<td colspan="3"><a href="changes.php"><strong>&gt;&gt;<?php print _("Recent changes") ?></strong></a></td>
			</tr>
			-->
			</table>
		</form>
	</td>

	<td valign="top">

<?php
$my_adlogger_cookie = "";
if (isset($_COOKIE['durelog'])) {
	$my_adlogger_cookie = $_COOKIE['durelog'];
}
?>
<?php 
if (!isset($ad_check)) { 
$my_adlogger_url = "http://www.openthesaurus.de/myadlogger/ad_check.php?visitor_ip=$_SERVER[REMOTE_ADDR]&durelog=".$my_adlogger_cookie;
#print $my_adlogger_url;
$ad_check = file_get_contents($my_adlogger_url); } 
if ($ad_check == 'y') { ?>

<script type="text/javascript"><!--
google_ad_client = "pub-8332914916360301";
google_ad_width = 120;
google_ad_height = 240;
google_ad_format = "120x240_as";
google_ad_type = "text_image";
//2006-09-27: idxVerticalBannerStdRight
google_ad_channel ="1582672140";
google_color_border = "FFFFFF";
google_color_bg = "FFFFFF";
google_color_link = "0000FF";
google_color_text = "000000";
google_color_url = "008000";
//--></script>
<script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<?php } ?>

	</td>
		
	<td valign="top">

		<?php 
		if( REALTIME_STATS_UPDATE ) {
			include("stats.php");
		} else {
			include("stats_output.html");
		}
		?>
			
	</td>

	<td valign="top">

		<table cellspacing="2" cellpadding="0" border="0">
		<tr><td>
			<strong>Links</strong>
			<ul style="margin-top: 0px;margin-bottom: 0px">
				<li><a href="background.php">Hintergrundinformationen</a></li>
				<li><a href="http://lists.berlios.de/mailman/listinfo/openthesaurus-discuss">OpenThesaurus Mailingliste</a></li>
				<li><a href="http://de.wikipedia.org">Wikipedia</a> / <a href="http://de.wiktionary.org">Wiktionary</a></li>
				<li>W&ouml;rterbuch Deutsch/Englisch:
					<ul>
					<li><a href="http://dict.tu-chemnitz.de/">dict.tu-chemnitz.de</a></li>
					<li><a href="http://www.dict.cc/">dict.cc</a></li>
					</ul>
				</li>
				<li><a href="http://www.abkuerzungen.de/">Abk&uuml;rzungen</a></li>
				<li>OpenThesaurus:
					<a href="http://synonimy.sourceforge.net/">Polnisch</a>,
					<a href="http://openoffice-es.sourceforge.net/thesaurus/">Spanisch</a>,
					<a href="http://www.openthesaurus.tk">Slowakisch</a>,
					<a href="http://synonymer.merg.net/">Norwegisch</a>,
					<a href="http://openthesaurus.caixamagica.pt/">Portugiesisch</a>
					</li>
			</ul>
		</td></tr>
		</table>

	</td>
</tr>
</table>

<br />
<table border="0" cellpadding="2" cellspacing="5">
<tr>
	<td valign="top"><strong>Neuigkeiten</strong><br />
		<a href="news_archive.php">&gt;&gt;Archiv</a></td>
	<td colspan="2">
		<?php include("news.php"); ?>
	</td>
</tr>
<tr><td></td></tr>
<tr>
	<td valign="top"><strong><?php print _("Download") ?></strong><br />
		<a href="faq.php#ooo"><?php print _("&gt;&gt;details") ?></a></td>
	<td><?php include("../include/download.php"); ?></td>
	<td align="center">
	
	<!-- Creative Commons License -->
	<a href="http://creativecommons.org/licenses/LGPL/2.1/">
	<img alt="CC-GNU LGPL" border="0" src="http://creativecommons.org/images/public/cc-LGPL-a.png" /></a><br />
	<span style="font-size:small">The thesaurus data is licensed<br />under the <a href="http://creativecommons.org/licenses/LGPL/2.1/">CC-GNU LGPL</a>.</span>
	<!-- /Creative Commons License -->
	
	<!--
	
	<rdf:RDF xmlns="http://web.resource.org/cc/"
	    xmlns:dc="http://purl.org/dc/elements/1.1/"
	    xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
	<Work rdf:about="">
	   <license rdf:resource="http://creativecommons.org/licenses/LGPL/2.1/" />
	   <dc:type rdf:resource="http://purl.org/dc/dcmitype/Software" />
	</Work>
	
	<License rdf:about="http://creativecommons.org/licenses/LGPL/2.1/">
	<permits rdf:resource="http://web.resource.org/cc/Reproduction" />
	   <permits rdf:resource="http://web.resource.org/cc/Distribution" />
	   <requires rdf:resource="http://web.resource.org/cc/Notice" />
	   <permits rdf:resource="http://web.resource.org/cc/DerivativeWorks" />
	   <requires rdf:resource="http://web.resource.org/cc/ShareAlike" />
	   <requires rdf:resource="http://web.resource.org/cc/SourceCode" />
	</License>
	
	</rdf:RDF>
	
	-->
	
	</td>
</tr>
</table>

<br />

<script type="text/javascript">
<!--
	document.f.word.focus();
// -->
</script>

<?php 
include("../include/bottom.php"); 
page_close();
?>
