<?php
// if( ! (getenv('REMOTE_ADDR') == getenv('SERVER_ADDR')) ) {
// 	print "Access from your host is denied.";
// 	return;
// }

include("../include/phplib/prepend.php3");
$db = new DB_Thesaurus;
include("../include/tool.php");

$hp = HOMEPAGE;
$copyright = COPYRIGHT;
$ti = LANGUAGE . ' Thesaurus in text format';
$target = TARGET_TEXT;

print "Exporting data to '../download/$target'...<br>\n";
flush();

$query = sprintf("SELECT id FROM meanings WHERE hidden = 0");
$db->query($query);
$lines = array();
while( $db->next_record() ) {
	#print $db->f('id')."<br>";
	$s = getSynsetWithUsage($db->f('id'));
	if( sizeof($s) > 1 ) {
		array_push($lines, join(';', unescape($s)));
	}
}
sort($lines);

$fh = fopen("../download/" . $target, 'w');
if( ! $fh ) {
	print "Error: Cannot open '../download/$target' for writing.\n";
	return;
}
fwrite($fh, "# OpenThesaurus - $ti\n");
fwrite($fh, "# Automatically generated ".strftime("%Y-%m-%d %H:%M", time())."\n");
fwrite($fh, "# $hp\n");
fwrite($fh, "# $copyright\n");
fwrite($fh, LICENSE);
foreach( $lines as $line ) {
	$line = maybeConvert($line);
	fwrite($fh, $line."\n");
}
fclose($fh);
// $cmd = "cd ../download && /bin/tar -czvf ./$target.tar.gz ./COPYING ./$target";
// $cmd = "/usr/bin/gzip ../download/$target -c >../download/$target.gz";
// print "Calling '$cmd'...<br>\n";
// system($cmd);
//unlink("../download/" . $target);

print "Done. File is at <a href=\"../download/$target.tar.bz2\">$target.tar.bz2</a><br>\n";

page_close();
?>
