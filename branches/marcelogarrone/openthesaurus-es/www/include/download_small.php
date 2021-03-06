	<?php
	// NOTE: keep in sync with download.php!
	$filename = TARGET_DOWNLOAD . TARGET_OOO2;
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
	// NOTE: keep in sync with download.php!
	$filename = TARGET_DOWNLOAD . TARGET_TEXT . ".gz";
	$fp = fopen($filename, "r");
	$s_array = fstat($fp);
	fclose($fp);
	$date = date(TIMEFORMAT_SHORT, $s_array["mtime"]);
	$size = sprintf("%.0f", $s_array["size"]/1000);
	?>
	<a href="<?php print BASE_URL . "/download/" . TARGET_TEXT . ".gz" ?>"><?php print T_("Plain text thesaurus") ?></a>
		(<?php print $size ?> KB, <?php print $date ?>,
		<?php print T_("can be used with <a href=\"http://www-user.tu-chemnitz.de/~fri/ding/\">Ding</a>") ?>)
