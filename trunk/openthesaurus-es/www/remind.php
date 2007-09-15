<?php
include("include/phplib/prepend.php3");
include("include/tool.php");

$title = T_("Password Reminder");
include("include/top.php");
?>

<p><?php print sprintf(T_("Send password to '%s'?"), escape(uservar('email'))) ?></p>

<form action="do_remind.php" method="post">
<input type="hidden" name="email" value="<?php print escape(uservar('email')) ?>" />
<?php print "<input type=\"submit\" value =\"". T_("Send password") ."\" />" ?>
</form>

<?php include("include/bottom.php"); ?>
