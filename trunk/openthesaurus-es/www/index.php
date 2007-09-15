<?php
include("../include/phplib/prepend.php3");
$cancel_login = 1;
page_open(array("sess" => "Thesaurus_Session", "auth" => "Thesaurus_Default_Auth"));
include("../include/tool.php");
$db = new DB_Thesaurus;

$title = _("OpenThesaurus - German Thesaurus");
$page = "homepage";
include("../include/top.php");
?>

<p><?php print _("OpenThesaurus is an Open Source thesaurus for the German language."); ?></p>

<table border="0" cellpadding="2" cellspacing="5">
<tr>

	<td width="40%" align="left" bgcolor="#eeeeee" valign="middle">
		<form action="<?php print DEFAULT_SEARCH ?>" method="get" name="f">
			<input type="hidden" name="search" value="1" />
			<table border="0" align="left" cellspacing="0" cellpadding="2">
			<tr>
				<td><strong>&gt;&gt;<?php print _("Word") ?>:</strong></td>
				<td><input accesskey="s" type="text" size="18" name="word" value="" /></td>
				<td><?php print "<input type='submit' value='" . _("Search") . "' />" ?></td>
			</tr>
			<? if (strpos(DEFAULT_SEARCH, "synset") !== false) { ?>
			<tr>
				<td></td>
				<td colspan="2"><label class="myhover"><input type="checkbox" name="substring" />
					<?php print _("Find substrings") ?></label></td>
			</tr>
			<? } ?>
			<tr><td></td></tr>
			<tr>
				<td colspan="3"><a href="check.php?time=<?php print time() ?>"><strong>&gt;&gt;<?php print _("Verify synonym sets") ?></strong></a>
				<br />
				</td>
			</tr>
			<tr><td></td></tr>
			<tr>
				<td colspan="3"><a href="tree.php"><strong>&gt;&gt;<?php print _("Tree view") ?></strong></a></td>
			</tr>
			<tr><td></td></tr>
			<tr>
				<td colspan="3"><a href="top_users.php"><strong>&gt;&gt;<?php print _("Top 15 users") ?></strong></a></td>
			</tr>
			
			</table>
		</form>
	</td>
	
	<td valign="top">

		<?php 
		if( REALTIME_STATS_UPDATE ) {
			include("stats.php");
		} else {
			include("stats_output.html");
		}
		?>
			
	</td>

	<td valign="top">

		<?php include("links.php"); ?>

	</td>
</tr>
</table>

<br />
<table border="0" cellpadding="2" cellspacing="5">
<tr>
	<td valign="top"><strong>News</strong><br />
		<a href="news_archive.php">&gt;&gt;Archive</a></td>
	<td>
		<?php include("news.php"); ?>
	</td>
</tr>
<tr><td></td></tr>
<tr>
	<td valign="top"><strong><?php print _("Download") ?></strong><br />
		<a href="faq.php#ooo"><?php print _("&gt;&gt;details") ?></a></td>
	<td>
		<table border="0" cellpadding="2" cellspacing="0">
		<tr>
			<!-- make layout similar to "news" area above: -->
			<td valign="top" align="right" width="90">&nbsp;</td>
			<td>
				<?php include("../include/download_small.php"); ?>
			</td>
		</tr>
		</table>
	</td>
</tr>
</table>

<br />

<script type="text/javascript">
<!--
	document.f.word.focus();
// -->
</script>

<?php 
include("../include/bottom.php"); 
page_close();
?>
