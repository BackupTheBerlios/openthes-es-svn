<?php
include("../include/phplib/prepend.php3");
page_open(array("sess" => "Thesaurus_Session", "auth" => "Thesaurus_Auth"));
$db = new DB_Thesaurus;
include("../include/tool.php");

if( $auth->auth['uname'] != 'admin' ) {
	print "Access denied.";
	return;
}

$title = "OpenThesaurus admin interface: Morphologics";
include("../include/top.php");

if( ! array_key_exists('id', $_GET) ) {
	$s_id = 0;
} else {
	$s_id = $_GET['id'];
}

// list available subjects:
$query = "SELECT id, morphologic FROM morphologics ORDER BY id";
$db->query($query);
while( $db->next_record() ) {
	if( $db->f('id') == $s_id ) {
		print "<strong>".$db->f('morphologic')."</strong> ";
	} else {
		print "<a href=\"morphologic.php?id=".$db->f('id')."\">".$db->f('morphologic')."</a> ";
	}
}
print "<br /><br />";

$i = 1;

$query = sprintf("SELECT id
	FROM meanings
	WHERE 
		morphologic_id = %d AND
		hidden = 0", $s_id);
$db->query($query);
while( $db->next_record() ) {
	$s = getSynset($db->f('id'));
	print $i.". <a href=\"../synset.php?id=".$db->f('id')."\">".join(', ', $s)."</a>\n";
	print "<br>";
	$i++;
}

include("../include/bottom.php");
page_close();
?>
