<?php
include("../include/phplib/prepend.php3");
$cancel_login = 1;
page_open(array("sess" => "Thesaurus_Session", "auth" => "Thesaurus_Default_Auth"));
$title = "OpenThesaurus FAQ";
$page = "faq";
include("../include/top.php");
?>

<p>Sorry, most of the FAQ is only available in German.
But please check out the two <a href="#english">English language
questions</a> at the 
bottom.</p>

<?php
$q_list = array();
$a_list = array();
$name_list = array();

// ------------------------------------------------

addFAQ("Einleitung",
	'<p>OpenThesaurus ist eine interaktive Website zur Pflege eines 
	deutschsprachigen Thesaurus. Ein Thesaurus ist ein Synonymwörterbuch,
	man kann dort also Wörter mit gleicher oder ähnlicher Bedeutung
	nachschlagen. Zum Beispiel liefert die <a href="multimatch.php?word=falsch">Suche nach 
	<bsp>falsch</bsp></a> unter anderem
	<bsp>inkorrekt, unrichtig, verkehrt</bsp> als Synonyme.</p>

	<p>Jeder kann bei OpenThesaurus mitmachen und Fehler korrigieren 
	oder neue Synonyme einfügen. Die Suchfunktion zeigt alle Bedeutungen,
	in denen ein Wort vorkommt (z.B. <bsp>roh</bsp> -&gt; <bsp>roh, ungekocht</bsp> 
	und einen anderen Eintrag für <bsp>roh, rau, grob, unsanft</bsp>). Bei 
	den einzelnen Bedeutungen  lassen sich dann unpassende Wörter löschen 
	und neue hinzufügen. Findet die Suche keine Treffer, wird ein Link 
	angeboten, mit dem man das Wort zum Thesaurus hinzufügen kann
	(wenn man denn Synonyme zu dem Wort kennt).</p>
	
	<p>Zur Mitarbeit ist eine <a
	href="register.php">Registrierung</a> erforderlich.
	Vorher sollte man diese FAQ zu Ende lesen, um die
	wichtigsten Regeln für das Ändern und Einfügen von
	Wörtern zu kennen. Mit dem "Einträge prüfen"-Link auf der Homepage
	kann man sich zufällig ausgewählte Beispiele anzeigen lassen,
	damit sollte man recht schnell verstehen können, wie die Synonyme
	hier gesammelt werden.
	Der Thesaurus wird übrigens unter der
	<a href="http://www.gnu.org/copyleft/lesser.html">LGPL</a> veröffentlicht.
	</p>

	<p>Bevor man Einträge einfügt oder ändert, muss man verstehen, 
	wie die Thesaurusdaten hier
	strukturiert sind -- nämlich nach Bedeutungen. Wenn es also
	von einem Wort wie <bsp>Bank</bsp> mehrere
	Bedeutungen gibt, so muss <em>pro Bedeutung ein Eintrag</em> existieren.
	Zu dem Eintrag <bsp>Bank</bsp>,
	<bsp>Kreditinstitut</bsp> kann man also <em>nicht</em>
	<bsp>Sitzbank</bsp> hinzufügen, weil das ja etwas anderes
	bedeutet. Stattdessen muss man einen weiteren Eintrag
	<bsp>Bank, Sitzbank</bsp> einfügen.</p>
	
	<p>Wer nicht weiß, wo er anfangen soll, kann dem "Einträge prüfen"-Link 
	auf der Homepage folgen. Es werden dann zufällig ausgewählte
	Synonymgruppen angezeigt, zu denen einem vielleicht ein weiteres
	Synonym einfällt, oder bei denen man ein unpassendes Wort
	löschen kann. Die Wörter sind auch untereinander verlinkt:
	erscheint hinter einem Wort eine Zahl, so ist das die Anzahl
	der Synonymgruppen, in der das Wort vorkommt. Durch Klick auf die
	Zahl bekommt man diese Synonymgruppen aufgelistet.</p>');

addFAQ("Was ist ein Synonym?",
	'<p>Wenn zwei oder mehr Wörter in einem bestimmten Kontext
	die gleiche Bedeutung haben, sind sie Synonyme. Beispiele:</p>
	
	<p><bsp>Adresse</bsp>, <bsp>Anschrift</bsp><br />
	<bsp>gelingen</bsp>, <bsp>glücken</bsp>, <bsp>klappen</bsp><br />
	<bsp>oft</bsp>, <bsp>häufig</bsp>
	</p>
	
	<p>Ob Wörter Synonyme sind, lässt sich einfach durch einen
	ausgedachten Satz wie <bsp>Ich gehe <em>oft</em> ins Kino</bsp> überprüfen.
	Hier lässt sich <bsp>oft</bsp> durch <bsp>häufig</bsp> ersetzen, ohne dass
	der Satz dadurch eine andere Bedeutung bekommt. Also sind
	<bsp>oft</bsp> und <bsp>häufig</bsp> Synonyme.</p>
	
	<p>Folgende Wortpaare sind dagegen <em>keine</em> Synonyme:</p>
	<p><bsp>warm</bsp> -- <bsp>heiß</bsp> (die Bedeutung unterscheidet sich zu sehr)<br />
	<bsp>Haus</bsp> -- <bsp>Gebäude</bsp> (Haus ist ein Unterbegriff (Hyponym) von Gebäude)</p>
	
	<p>Die Synonyme einer Bedeutung bilden eine <em>Synonymgruppe</em>.
	Ein Wort mit verschiedenen Bedeutungen  -- wie z.B. <bsp>Bank</bsp> --
	taucht in so vielen Synonymgruppen auf, wie es verschiedene Bedeutungen
	hat, z.B.:</p>
	
	<p>Synonymgruppe 1: <span class="bsp">Bank, Kreditinstitut</span><br />
	Synonymgruppe 2: <span class="bsp">Bank, Sitzbank</span></p>
	
	<p>Hinweis für Experten: Die Synonymgruppen sollen den <em>synsets</em> von 
	<a href="http://wordnet.princeton.edu/">WordNet</a> entsprechen.</p>',
	"syn");

addFAQ("Was soll ich bei meinen Eingaben und Änderungen beachten?",
	'<p>In Kurzform:</p>
	<ul>
		<li>Es geht <strong>nicht</strong> darum, auf anderen (Wörterbuch/Thesaurus-)Seiten zu surfen
			und dann die Begriffe systematisch zu übernehmen. Wenn das
			rechtlich und technisch möglich wäre, hätten wir das schon längst 
			gemacht.</li>
		<li>Die neue Rechtschreibung benutzen. In Fällen,
			in denen laut neuer Rechtschreibung zwei Schreibweisen
			erlaubt sind, ist es auch okay (und gewünscht), beide einzugeben.</li>
		<li>Möglichst keine sehr seltenen Begriffe einfügen. Im Zweifel kann man
			mit Google suchen (nur über deutsche Seiten!): bei weniger als
			ca. 100 Treffern sollte man sich schon genau überlegen, ob
			es sinnvoll ist, das Wort einzufügen.</li>
		<li>Keine englischen Begriffe einfügen, außer sie sind im Deutschen
			verbreitet (z.B. <span class="bsp">Shampoo</span>; im Zweifel
			im Rechtschreib-Duden nachschlagen -- wenn es dort drinsteht,
			kann es auch in OpenThesaurus stehen).</li>
		<li>Keine Eigen- oder Firmen- einfügen (die bestehenden 
			sollen aber drin bleiben).</li>
		<li>Nur Grundformen (siehe nächste Frage) einfügen, keine Beugungen.</li>
		<li>Veraltete Wörter bitte entsprechend kennzeichnen, d.h.
			<bsp>(veraltet)</bsp> dahinter schreiben.</li>
		<li>Regionale Wörter bitte mit <bsp>(regional)</bsp> kennzeichnen, aber auch
			nur aufnehmen, wenn sie in ganz Süd-/Nord-/Ost-/Westdeutschland vorkommen,
			alles andere ist zu speziell. Österreichische Wörter mit <bsp>(österr.)</bsp>,
			schweizerische mit <bsp>(schweiz.)</bsp> kennzeichnen.</li>
		<li>Fremdwörter, sofern nicht zu speziell, können durchaus hinzugefügt werden.
			Beispiel: <span class="bsp">Appendix, Blinddarm</span></li>
	</ul>', 'korr');

addFAQ("Was ist hier mit <em>Grundform</em> gemeint?",
	'<p>In die Datenbank sollen nur nicht-abgeleitete Wortformen
	eingefügt werden, d.h. bei Verben der Infinitiv,
	bei Nomen der Singular, bei Adjektiven die nicht-gesteigerte
	Form. Beispiele:</p>
	
	<p>
	okay: <bsp>laufen</bsp>, aber nicht: <bsp>lief</bsp>, <bsp>läufst</bsp>, ...<br />
	okay: <bsp>Haus</bsp>, aber nicht: <bsp>Häuser</bsp><br />
	okay: <bsp>lang</bsp>, aber nicht: <bsp>länger</bsp><br />
	</p>',
	"grundform");

addFAQ("Wie funktioniert die Sache mit den Ober- und Unterbegriffen?",
	'<p>Das Ziel ist es, langfristig alle Synonymgruppen außer solche mit
	Adjektiven in einer Hierarchie anzuordnen. Der obere
	Teil der Nomen-Hierarchie ist so aufgebaut:</p>

	<pre>
	-<a href="synset.php?id='.TOP_SYNSET_ID.'">Irgendetwas</a>
		-<a href="synset.php?id=17627">Entität</a> (alles, was physikalisch existieren kann)
			-<a href="synset.php?id=10210">Ort, Bereich, Platz, ...</a> (z.B. "Stadt")
			-<a href="synset.php?id=7405">Lebewesen, Kreatur, ...</a> (z.B. "Tier")
			-<a href="synset.php?id=17631">nichtlebendes Objekt</a> (z.B. "Gebäude")
		-<a href="synset.php?id=17628">Abstraktion</a> (z.B. "Konzept")
		-<a href="synset.php?id=10974">Zustand, Status, ...</a> (z.B. "Freiheit")
		-<a href="synset.php?id=15490">Ereignis, Geschehen, ...</a> (z.B. "Wunder")
		-<a href="synset.php?id=9032">Aktion, Handlung</a> (z.B. "Kommunikation")
		-<a href="synset.php?id=15545">Gruppierung, Bündelung</a> (z.B. "Bevölkerung")
		-<a href="synset.php?id=17629">psychologische Eigenschaft</a> (z.B. "Emotion")
	</pre>
	
	<p>Das liest sich dann so: <bsp>Stadt</bsp> ist ein <bsp>Ort</bsp>
	ist eine <bsp>Entität</bsp> ist ein <bsp>Irgendetwas</bsp>.
	<bsp>Irgendetwas</bsp> ist die 
	künstliche Oberkategorie, unter der alle Nomen hängen sollen, bei
	Verben ist es <bsp>machen, tun</bsp>.
	Der oben abgebildete Teil der Hierarchie ist festgelegt und
	sollte nicht geändert (auch nicht erweitert) werden. Alle bestehenden
	oder neuen Synonymgruppen sollen unter diese Hierarchie angehängt
	werden. Bei Verben gilt entsprechendes. Die komplette Hierarchie für Nomen
	und Verben kann man sich in der <a href="tree.php">Baumansicht</a> anschauen.</p>
	
	<p>Beispiel: Eine Synonymgruppe Auto/PKW würde man folgenderweise in die
	Hierarchie einbauen:<br />
	<bsp>Auto/PKW</bsp> ist ein <bsp>Fahrzeug</bsp> ist ein
	<bsp>nichtlebendes Objekt</bsp> ist eine <bsp>Entität</bsp>
	ist ein <bsp>Irgendetwas</bsp>.</p>
	
	<p>Ein Begriff <bsp>Y</bsp> ist nur dann ein Unterbegriff von 
	<bsp>X</bsp>, wenn man sagen kann "Y ist ein X". Man kann
	z.B. <em>nicht</em> sagen "Ein Messer ist ein Besteck" (ein
	Messer ist <em>Teil</em> eines Bestecks, aber diese Beziehung
	wird hier noch nicht erfasst).</p>
	
	<p>In der Begriffshierarchie soll nur Allgemeinwissen
	gespeichert werden, z.B. dass eine Eiche ein Baum ist -- die
	korrekte und ausführliche Taxonomie der Botanik ist hier nicht gefragt.
	Weiterhin sollen keine Eigennamen gespeichert werden, also nicht:
	BMW ist ein Auto/PKW.</p>
	
	<p>Man kann bei der Synonymgruppe jeweils nur den Oberbegriff angeben.
	Um Unterbegriffe anzugeben muss man diese suchen und dort dann
	den entsprechenden Oberbegriff eintragen. Die gesuchten Synonymgruppen
	erscheinen dann beim Oberbegriff als weitere Unterbegriffe.
	Jede Synonymgruppe kann nur einen Oberbegriff haben.
	</p>',
	'hierarchie');

addFAQ("Warum muss man sich registrieren?",
	'<p>So soll verhindert werden, dass Unsinn in die
	Datenbank eingegeben wird. Lesezugriff hat man auch ohne
	Registrierung. Ebenso kann man alle Dateien herunterladen,
	ohne registriert zu sein, oder <a href="add.php">Wörter vorschlagen</a>.</p>', 'register');

addFAQ("Was sind die \"Wikipedia-Links\"?",
	'<p>In der Wikipedia sind Artikel über Links im Text miteinander verbunden.
	Die ersten dieser Links eines Artikels werden im Bereich
	"Wikipedia-Links" angezeigt.
	Da die Wikipedia ein Lexikon ist und kein Wörterbuch, gibt es in diesem Bereich
	oft nur zu Nomen Treffer, nicht zu Verben und Adjektiven.</p>', 'wikilinks');

#addFAQ("Die Vorschläge der Rechtschreibprüfung stimmen nicht!",
#	'<p>Das kann vorkommen, da die Rechtschreibprüfung nicht alle (aber fast alle)
#	Wörter aus OpenThesaurus kennt. Andererseits kennt sie viele Wörter,
#	die OpenThesaurus nicht kennt, und schlägt sie vor. Teilweise werden
#	sinnlose Wörter wie <bsp>Flutwurst</bsp> vorgeschlagen. Außerdem
#	werden auch "Korrekturen" vorgeschlagen, wenn der Suchbegriff bis auf
#	Groß- und Kleinschreibung korrekt geschrieben war.</p>
#	
#	<p>Als Wortliste wird die Hunspell-Liste von
#	<a href="http://j3e.de/ispell/igerman98/">Björn Jacke</a>
#	benutzt, als Programm zur Rechtschreibprüfung
#	<a href="http://hunspell.sourceforge.net/">Hunspell</a>.',
#	'spellcheck');

$filename_ooo = "download/OOo-Thesaurus-snapshot.zip";
$fp = fopen($filename_ooo, "r");
$s_array = fstat($fp);
fclose($fp);
$date_ooo = strftime("%Y-%m-%d %H:%M", $s_array["mtime"]);
$size_ooo = sprintf("%.0f", $s_array["size"]/1000);

$filename_ooo2 = "download/thes_de_DE_v2.zip";
$fp = fopen($filename_ooo2, "r");
$s_array = fstat($fp);
fclose($fp);
$date_ooo2 = strftime("%Y-%m-%d %H:%M", $s_array["mtime"]);
$size_ooo2 = sprintf("%.0f", $s_array["size"]/1000);

$filename_ooo2_ch = "download/thes_de_CH_v2.zip";
$fp = fopen($filename_ooo2_ch, "r");
$s_array = fstat($fp);
fclose($fp);
$date_ooo2_ch = strftime("%Y-%m-%d %H:%M", $s_array["mtime"]);
$size_ooo2_ch = sprintf("%.0f", $s_array["size"]/1000);

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

// TODO: include("../include/download.php") ?
addFAQ("Wo kann ich die Thesaurus-Daten herunterladen?",
	"<p>Die deutschen OpenThesaurus-Daten stehen unter der <a href=\"http://www.gnu.org/licenses/lgpl.html\">LGPL</a>
	zur Verfügung:</p>
	<ul>
		<li>In <strong>OpenOffice.org</strong> kann man OpenThesaurus installieren
			über \"Datei &gt; Assistenten &gt; Weitere Wörterbücher installieren\". Dabei
			wird der Thesaurus von einem OpenOffice.org-Server heruntergeladen. 
			Man  bekommt allerdings keinen ganz aktuellen Thesaurus. Wer die aktuelle
			Version (täglich neu generiert) haben will, muss eine der folgenden Datei manuell
			installieren (unbedingt die passende Version benutzen, sonst stürzt OpenOffice.org
			ab!). Die sog. \"Offline-Installation\" im Assistenten ist mit den folgenden Archiven 
			&uuml;brigens <em>nicht</em> m&ouml;glich:
			<ul>
				<li><a href=\"$filename_ooo2\"><strong>Thesaurus für OpenOffice.org 2.x</strong>
				($size_ooo2 KB, generiert $date_ooo2)</a></li>
				<li><a href=\"$filename_ooo2_ch\">Thesaurus für OpenOffice.org 2.x, schweizer Version
				($size_ooo2_ch KB, generiert $date_ooo2_ch)</a> -- Diese Version unterscheidet
				sich von der Standard-Version nur dadurch, dass alle 
				<span class=\"bsp\">&szlig;</span> durch <span class=\"bsp\">ss</span>
				ersetzt wurden</li>
				<li><a href=\"$filename_ooo\">Thesaurus für OpenOffice.org 1.x ($size_ooo KB,
				generiert $date_ooo)</a><br />
				Während hier auf der Website Wörter nach Bedeutungen unterschieden werden,
				ist das im OpenOffice.org-1.x-Thesaurus nicht der Fall: Zum Beispiel werden
				bei der Suche nach <span class=\"bsp\">Bank</span> in OpenOffice.org 1.x
				die verschiedenen Bedeutungen (Sitzbank, Kreditinstitut) gemischt 
				angezeigt.</li>
			</ul>
			Die Installation ist jeweils in der
			README-Datei in dem Archiv beschrieben. 
			In allen Versionen ist nur die Suche nach
			Grundformen möglich, während hier auf der Website bei der Suche
			nach einer flektierten Form zumindest ein Link auf die Grundform
			angegeben wird (z.B. wird bei der Suche nach <span class=\"bsp\">ging</span>
			ein Link auf <span class=\"bsp\">gehen</span> angezeigt).</li>
		<li><a href=\"$filename_txt\"><strong>Thesaurus im Text-Format</strong>
			(komprimiert, $size_txt KB, generiert am $date_txt</a>,
			z.B. für <a href=\"http://www-user.tu-chemnitz.de/~fri/ding/\">Ding</a></li>
		<li><a href=\"$filename_kword\"><strong>Thesaurus für KWord</strong> <!-- ab Version 1.3 -->
			(komprimiert, $size_kword KB, generiert am $date_kword</a>).
			Installation: entpacken,
			nach \$KDEDIR/share/apps/thesaurus/ kopieren und
			dann in KThesaurus mit \"Change language\" auswählen</li>
		<li>Für Entwickler: <a href=\"$filename\">MySQL-Datenbank-Dump
			($size KB, generiert $date)</a></li>
	</ul>",
	"ooo");

addFAQ("Ich schaffe es nicht, den Thesaurus in OpenOffice.org nach der manuellen Installation zu aktivieren.",
	'<ul>
		<li>Bitte bei der manuellen Installation die Hinweise in der README-Datei genau beachten.</li>
		<li>Während der Installation von OpenOffice.org muss unter "Optionale Komponenten" das
		"Englische (US) Sprachmodul" installiert worden sein.
		Ohne dieses Modul ist auch der deutsche Thesaurus nicht funktionsfähig.</li>
	</ul>');

addFAQ("Kann ich OpenThesaurus auch mit anderen Textverarbeitungen benutzen?",
	'<p>Nein, OpenThesaurus funktioniert meines Wissens nur mit OpenOffice.org
	und KWord. Insbesondere kann man OpenThesaurus derzeit nicht in StarOffice oder Microsoft Word
	integrieren.</p>');

addFAQ("Kann ich OpenThesaurus auf meiner Homepage integrieren?",
	'<p>Mit folgendem HTML-Code kann man die OpenThesaurus-Suche auch auf der
	eigenen Homepage nutzen:</p>
	<pre>
	&lt;form action="http://www.openthesaurus.de/overview.php" method="get">
		&lt;input type="hidden" name="search" value="1" />
		&lt;input type="text" size="18" name="word" />
		&lt;input type="submit" value="Synonyme..." />
	&lt;/form>
	</pre>',
	'htmlform');


addFAQ("Mitwirkende und Helfer",
	'<p>Dankeschön an <a href="http://www-user.tu-chemnitz.de/~fri/">Frank Richter</a>
	für die Initialversion der Wortdaten und an alle Benutzer
	für ihre Beiträge. Die Wortformen, die auch zur Wortnormalisierung genutzt werden (man findet 
	z.B. <bsp>Auto</bsp>, auch wenn man nach <bsp>Autos</bsp> sucht), stammen
	aus <a href="http://www.wolfganglezius.de/doku.php?id=public:cl:morphy">Morphy</a>.</p>');

// ------------------------------------------------
// English:

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
print "<strong $style>Inhalt</strong>";
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
<p><i>Page updated: 2007-07-11</i></p>

<!-- enables scrolling to the bottom entries: -->
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

<?php include("../include/bottom.php"); ?>
