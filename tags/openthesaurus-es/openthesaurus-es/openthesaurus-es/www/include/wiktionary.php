<?php

// NOTE: this file is UTF-8!

$start = getmicrotime();
$queryterm = trim($_GET['word']);
$links = array();

function wiktionaryClean($s) {
	$s = preg_replace("/:(\[[\d,]+\])/", "<span class=\"wiktionarymeaning\">$1</span>", $s);
	$s = preg_replace("/\[\[/", "", $s);
	$s = preg_replace("/\]\]/", "", $s);
	$s = preg_replace("/&lt;sup&gt;(.*)&lt;\/sup&gt;/", "<span class=\"wiktionarymeaningref\">$1</span>", $s);
	return $s;
}

$match = 0;
if( $queryterm != "" ) {
	$query = sprintf("SELECT headword, meanings, synonyms FROM wiktionary WHERE headword = '%s'", 
		myaddslashes($queryterm));
		//myaddslashes(iconv("latin1", "utf8", $queryterm)));
	$db->query($query);
	$match = $db->next_record();
	$wikiword = $db->f('headword');
	$wikilink = "http://de.wiktionary.org/w/index.php?title=".urlencode($wikiword);
	$wikilink_history = "http://de.wiktionary.org/w/index.php?title=".urlencode($wikiword)."&amp;action=history";
	$wikilink_edit = "http://de.wiktionary.org/w/index.php?title=".urlencode($wikiword)."&amp;action=edit";
	#$wikiword = iconv("utf8", "latin1", $wikiword);
	if (!$match) {
		$wikilink = "http://de.wiktionary.org/";
	}
	?>
	<p class="compact"><strong><a href="http://de.wiktionary.org">Wiktionary</a></strong>:</p>
	<ul class="compact">
	<?php
	if ($match) {
		$meanings = wiktionaryClean($db->f('meanings'));
		$synonyms = wiktionaryClean($db->f('synonyms'));
		# FIXME: needed to display special characters, find a proper solution for this!
		$meanings = preg_replace("/[„“]/", "'", $meanings);
		#$meanings = iconv("utf8", "latin1", $meanings);
		#$synonyms = iconv("utf8", "latin1", $synonyms);
		# end fixme
		if ($synonyms == "") {
			$synonyms = T_("(none)");
		}
		?>
		<li><strong>Bedeutungen:</strong> <?php print $meanings ?></li>
		<li><strong>Synonyme:</strong> <?php print $synonyms ?></li>
		<?php
	} else { 
		print "<li>".T_("No matches")."</li>";
	}
}
?>

<?php if ($match) { ?>
	<li class="wiktionarylicense">Dieser Eintrag basiert auf dem Eintrag
	<a href="<?php print $wikilink ?>" class="wikilicenselink"><?php print $wikiword ?></a> 
	aus dem freien W&ouml;rterbuch Wiktionary und steht unter der 
	<a href="wiktionary/fdl.txt" class="wikilicenselink">GNU-Lizenz f&uuml;r freie Dokumentation</a>.
	Eine Liste der Versionen und Autoren ist im Wiktionary unter 
	<a href="<?php print $wikilink_history ?>" class="wikilicenselink">dieser
	Seite</a> verf&uuml;gbar; der Eintrag kann
	<a href="<?php print $wikilink_edit ?>" class="wikilicenselink">hier</a> bearbeitet werden.</li>
<?php } ?>

</ul>
<!-- TIME for wiktionary matches: <?php print (getmicrotime()-$start) ?> -->
