	<?php
	$filename = TARGET_DOWNLOAD_DIR . TARGET_OOO2;
	$fp = fopen($filename, "r");
	$s_array = fstat($fp);
	fclose($fp);
	$date = date(TIMEFORMAT_SHORT, $s_array["mtime"]);
	$size = sprintf("%.0f", $s_array["size"]/1000);
	?>
	<a href="<?php print BASE_URL . "/download/" . TARGET_OOO2 ?>"><?php print T_("OpenOffice.org 2.x thesaurus") ?></a>
	(<?php print $size ?> KB, 
	<?php print $date ?>)
	<br />

	<?php
	$filename = TARGET_DOWNLOAD_DIR . TARGET_OOO;
	$fp = fopen($filename, "r");
	$s_array = fstat($fp);
	fclose($fp);
	$date = date(TIMEFORMAT_SHORT, $s_array["mtime"]);
	$size = sprintf("%.0f", $s_array["size"]/1000);
	?>
	<a href="<?php print BASE_URL . "/download/" . TARGET_OOO ?>"><?php print T_("OpenOffice.org 1.x thesaurus") ?></a>
	(<?php print $size ?> KB, 
	<?php print $date ?>)
	<br />

	<?php
	$filename = TARGET_DOWNLOAD_DIR . TARGET_TEXT . ".tar.bz2";
	$fp = fopen($filename, "r");
	$s_array = fstat($fp);
	fclose($fp);
	$date = date(TIMEFORMAT_SHORT, $s_array["mtime"]);
	$size = sprintf("%.0f", $s_array["size"]/1000);
	?>
	<a href="<?php print BASE_URL . "/download/" . TARGET_TEXT . ".tar.bz2" ?>"><?php print T_("Plain text thesaurus") ?></a>
		(<?php print $size ?> KB, <?php print $date ?>,
		<?php print T_("can be used with <a href=\"http://www-user.tu-chemnitz.de/~fri/ding/\">Ding</a>") ?>)
	<br />

	<?php
	$filename = TARGET_DOWNLOAD_DIR . TARGET_KWORD . ".tar.bz2";
	$fp = fopen($filename, "r");
	$s_array = fstat($fp);
	fclose($fp);
	$date = date(TIMEFORMAT_SHORT, $s_array["mtime"]);
	$size = sprintf("%.0f", $s_array["size"]/1000);
	?>
	<a href="<?php print BASE_URL . "/download/" . TARGET_KWORD . ".tar.bz2" ?>"><?php print T_("KWord thesaurus") ?></a>
		(<?php print $size ?> KB, <?php print $date ?>)
	<br />
	
	<?php
	$filename = TARGET_DOWNLOAD_DIR . TARGET_SOURCE;
	$fp = fopen($filename, "r");
	$s_array = fstat($fp);
	fclose($fp);
	$date = date(TIMEFORMAT_SHORT, $s_array["mtime"]);
	$size = sprintf("%.0f", $s_array["size"]/1000);
	?>
	<a href="<?php print BASE_URL . "/download/" . TARGET_SOURCE ?>"><?php print T_("OpenThesaurus Source") ?></a>
		(<?php print $size ?> KB, <?php print $date ?>)


	<p>Desea tener un buscador de sin&oacute;nimos incrustado en tu web?</p>
	<p>Pues aqu&iacute; est&aacute; el c&oacute;digo:</p>
	<div style="color:#888888">
	<pre>
	&lt;form action="http://openthes-es.berlios.de/overview.php" method="get">
	&lt;input type="hidden" name="search" value="1" />
	&lt;input type="text" size="18" name="word" />
	&lt;input type="submit" value="Sin&oacute;nimos..." />
	&lt;/form>
	</pre>
	</div>

	<form action="http://openthes-es.berlios.de/overview.php" method="get">
	<input type="hidden" name="search" value="1" />
	<input type="text" size="18" name="word" />
	<input type="submit" value="Sin&oacute;nimos..." />
	</form>