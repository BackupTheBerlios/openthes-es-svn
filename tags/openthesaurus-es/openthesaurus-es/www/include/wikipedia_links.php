<?php

$start = getmicrotime();
$queryterm = trim($_GET['word']);
$links = array();

$matches = 0;
if( $queryterm != "" ) {
	$query = sprintf("SELECT link, title FROM wikipedia_links, wikipedia_pages 
		WHERE wikipedia_pages.title = '%s' AND wikipedia_pages.page_id = wikipedia_links.page_id", 
		myaddslashes($queryterm));
	#print $query;
	$db->query($query);
	?>
	<p class="compact"><strong>
		<a href="http://de.wikipedia.org">Wikipedia</a>-Links (<a href="faq.php#wikilinks">?</a>)</strong>:</p>
	<ul class="compact"><li>
	<?php
	$wikilinks = array();
	while($db->next_record()) {
		$link = $db->f("link");
		$realTitle = $db->f("title");
		if ($queryterm == $link || strpos($link, "(Begriffsklärung)") !== false) {
			continue;
		}
		if (in_array($link, $wikilinks)) {
			continue;
		}
		if ($matches > 0) {
			print ", ";
		}
		print "<a href=\"overview.php?word=".urlencode(getLookupWord($db->f("link")))."\">".
			$db->f("link")."</a>";
		array_push($wikilinks, $link);
		$matches++;
	}
	if ($matches == 0) {
		print T_("No matches");
	} else {
	?>
	<li class="wiktionarylicense">Quelle: <a class="wikilicenselink"
		href="http://de.wikipedia.org/wiki/<?php 
			$wikilink = escape($realTitle);
			$wikilink = preg_replace("/ /", "_", $wikilink);
			print urlencode($wikilink);
			?>">Wikipedia-Seite
		zu '<?php print escape($realTitle) ?>'</a>,
		Lizenz: <a href="wiktionary/fdl.txt" class="wikilicenselink">GNU-Lizenz
		f&uuml;r freie Dokumentation</a></li>
	<?php } ?>
	</ul>
	<?php
}
?>

<!-- TIME for wikipedia matches: <?php print (getmicrotime()-$start) ?> -->
