<?php
include("../include/phplib/prepend.php3");
$cancel_login = 1;
page_open(array("sess" => "Thesaurus_Session", "auth" => "Thesaurus_Default_Auth"));
$title = "OpenThesaurus Hintergrundinformation";
$page = "background";
include("../include/top.php");
?>

<p>OpenThesaurus ist ein deutscher Thesaurus (Synonymwörterbuch) und ein
<a href="http://de.wikipedia.org/wiki/Wortnetz_(Computerlinguistik)">Wortnetz</a>. Es
besteht ähnlich wie <a href="http://wordnet.princeton.edu/">WordNet</a> aus Synonymgruppen, also
Wortgruppen mit Wörtern der gleichen Bedeutung, z.B. <span class="bsp">Samstag, Sonnabend</span>.
Zwischen diesen Synonymgruppen bestehen Beziehungen wie "ist Oberbegriff von", wobei
OpenThesaurus nicht alle von WordNet bekannten Beziehungen unterstützt.</p>

<p>Papers über OpenThesaurus:</p>

<ul>
	<li><a href="http://www.danielnaber.de/publications/gldv-openthesaurus.pdf">OpenThesaurus: ein
	offenes deutsches Wortnetz (PDF, 536&nbsp;KB)</a></li>
	<li><a href="download/openthesaurus.pdf">OpenThesaurus: Building a Thesaurus with a Web Community (PDF, 266&nbsp;KB)</a></li>
</ul>

<p>OpenThesaurus findet man auch auf <a href="http://sourceforge.net/projects/openthesaurus/">Sourceforge</a>.</p>

<?php 
include("../include/bottom.php"); 
page_close();
?>
