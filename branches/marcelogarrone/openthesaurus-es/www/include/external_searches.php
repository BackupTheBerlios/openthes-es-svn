<?php
$word = $_GET['word'];
?>
<p class="compact"><strong><?php print sprintf(T_("Search '<span class=\"inp\">%s</span>' using :"), escape($word)); ?></strong></p>

<ul class="compact">
	<li><a href="<?php print sprintf("http://es.wikipedia.org/wiki/Especial:Search?search=%s&amp;go=Buscar", urlencode($word)); ?>">Wikipedia</a>
		(<a href="<?php print sprintf("http://www.google.com.uy/search?q=site:es.wikipedia.org+%s", urlencode($word)); ?>">via Google</a>)</li>
	<li><a href="<?php print sprintf("http://es.wiktionary.org/wiki/Especial:Search?search=%s&amp;go=Buscar", urlencode($word)); ?>">Wiktionary</a>
		(<a href="<?php print sprintf("http://www.google.com.uy/search?q=site:es.wiktionary.org+%s", urlencode($word)); ?>">via Google</a>)</li>
	<li><a href="<?php print sprintf("http://www.google.com.uy/search?q=%s&amp;lr=lang_es", urlencode($word)); ?>">Google</a></li>	
</ul>
