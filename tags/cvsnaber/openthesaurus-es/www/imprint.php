<?php
include("../include/phplib/prepend.php3");
$cancel_login = 1;
page_open(array("sess" => "Thesaurus_Session", "auth" => "Thesaurus_Default_Auth"));
$title = "OpenThesaurus Impressum";
$page = "imprint";
include("../include/top.php");
?>

<p>
ADD NAME HERE<br />
ADD ADDRESS HERE<br />
<?php print EMAIL ?><br />
Homepage: ADD HOMEPAGE here<br />
</p>

<?php include("../include/bottom.php"); ?>
