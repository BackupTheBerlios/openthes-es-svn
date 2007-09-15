<?php
include("include/phplib/prepend.php3");
$cancel_login = 1;
page_open(array("sess" => "Thesaurus_Session", "auth" => "Thesaurus_Default_Auth"));
include("include/tool.php");
$title = LANG_FAQTitle;
$page = "faq";
include("include/top.php");
?>

<!--<p>Sorry, most of the FAQ is only available in German.
But please check out the two <a href="#english">English language
questions</a> at the 
bottom.</p>-->

<?php
$q_list = array();
$a_list = array();
$name_list = array();

// ------------------------------------------------

addFAQ(LANG_FAQ_Einleitung1,LANG_FAQ_Einleitung2);

addFAQ(LANG_FAQ_Syn1,LANG_FAQ_Syn2, "syn");

addFAQ(LANG_FAQ_Korr1,LANG_FAQ_Korr2, 'korr');

addFAQ(LANG_FAQ_Grundform1,LANG_FAQ_Grundform2,"grundform");

addFAQ(LANG_FAQ_Register1,LANG_FAQ_Register2, 'register');

addFAQ(LANG_FAQ_DasSuchergebnis1,LANG_FAQ_DasSuchergebnis2);

addFAQ(LANG_FAQ_spellcheck1,LANG_FAQ_spellcheck2,'spellcheck');

$filename_ooo = "download/OOo-Thesaurus-snapshot.zip";
$fp = fopen($filename_ooo, "r");
$s_array = fstat($fp);
fclose($fp);
$date_ooo = strftime("%Y-%m-%d %H:%M", $s_array["mtime"]);
$size_ooo = sprintf("%.0f", $s_array["size"]/1000);

$filename_ooo2 = "download/thes_es_ES_v2.zip";
$fp = fopen($filename_ooo2, "r");
$s_array = fstat($fp);
fclose($fp);
$date_ooo2 = strftime("%Y-%m-%d %H:%M", $s_array["mtime"]);
$size_ooo2 = sprintf("%.0f", $s_array["size"]/1000);
/*MARCELOGARRONE
$filename_ooo2_ch = "download/thes_de_CH_v2.zip";
$fp = fopen($filename_ooo2_ch, "r");
$s_array = fstat($fp);
fclose($fp);
$date_ooo2_ch = strftime("%Y-%m-%d %H:%M", $s_array["mtime"]);
$size_ooo2_ch = sprintf("%.0f", $s_array["size"]/1000);
MARCELOGARRONE*/
$filename = "download/thesaurus_dump.tar.bz2";
$fp = fopen($filename, "r");
$s_array = fstat($fp);
fclose($fp);
$date = strftime("%Y-%m-%d %H:%M", $s_array["mtime"]);
$size = sprintf("%.0f", $s_array["size"]/1000);

$filename_txt = "download/thesaurus.txt.gz";
$fp = fopen($filename_txt, "r");
$s_array = fstat($fp);
fclose($fp);
$date_txt = strftime("%Y-%m-%d %H:%M", $s_array["mtime"]);
$size_txt = sprintf("%.0f", $s_array["size"]/1000);

$filename_kword = "download/kword_thesaurus.txt.gz";
$fp = fopen($filename_kword, "r");
$s_array = fstat($fp);
fclose($fp);
$date_kword = strftime("%Y-%m-%d %H:%M", $s_array["mtime"]);
$size_kword = sprintf("%.0f", $s_array["size"]/1000);

// TODO: include("include/download.php") ?
addFAQ(LANG_FAQ_ooo1,LANG_FAQ_ooo2,"ooo");

addFAQ(LANG_FAQ_readme1,LANG_FAQ_readme2);

addFAQ(LANG_FAQ_txt1,LANG_FAQ_txt2);

addFAQ(LANG_FAQ_hierarchie1,LANG_FAQ_hierarchie2,'hierarchie');

addFAQ(LANG_FAQ_htmlform1,LANG_FAQ_htmlform2,'htmlform');


addFAQ(LANG_FAQ_MitwirkendeUndHelfer1,LANG_FAQ_MitwirkendeUndHelfer2);

// ------------------------------------------------
// English:
/*
$eflag = '<img border="0" src="art/english_flag.png" width="18" height="13" alt="English" />';
addFAQ("$eflag I'm looking for an English thesaurus.",
	'<p>Please have a look at
	<a href="http://www.thesaurus.com/">thesaurus.com</a> or
	<a href="http://wordnet.princeton.edu/perl/webwn/">WordNet</a>.</p>',
	'english');

addFAQ("$eflag I want to start a thesaurus project like OpenThesaurus, but for a new language. 
	What should I do?",
	'<p>Please read <a href="download/openthesaurus.pdf">this paper (PDF, 266 KB)</a>, it
	explains how OpenThesaurus works and how it can be 
	adapted to other languages. Contact me if you have other questions.</p>');
	// TODO: link <a href="http://sourceforge.net/projects/openthesaurus/">...</a>
*/
// ------------------------------------------------

function addFAQ($q, $a, $name="") {
	global $q_list, $a_list, $name_list;
	$q = preg_replace("/<bsp>/", '<span class="bsp">', $q);
	$q = preg_replace("/<\/bsp>/", '</span>', $q);
	$a = preg_replace("/<bsp>/", '<span class="bsp">', $a);
	$a = preg_replace("/<\/bsp>/", '</span>', $a);
	array_push($q_list, $q);
	array_push($a_list, $a);
	array_push($name_list, $name);
}
?>

<?php
$bgcol = "#dddddd";
$style = 'style="padding:2px;%;background-color:'.$bgcol.'"';

// TOC:
print "<strong $style>".LANG_Inhalt."</strong>";
print "<ul>";
$i = 0;
foreach($q_list as $item) {
	$name = $name_list[$i];
	if( ! $name ) {
		$name = "item$i";
	}
	print "<li><a href=\"#$name\">$item</a></li>\n";
	$i++;
}
print "</ul>";
?>

<?php
// Content:
$i = 0;
foreach($q_list as $item) {
	$name = $name_list[$i];
	if( ! $name ) {
		$name = "item$i";
	}
	print "<p><a name=\"$name\"><strong $style>$item</strong></a></p>\n";
	print $a_list[$i]."\n\n";
	$i++;
}
?>

<br />
<p><i>Page updated: 2006-09-14</i></p>

<!-- enables scrolling to the bottom entries: -->
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

<?php include("include/bottom.php"); ?>
