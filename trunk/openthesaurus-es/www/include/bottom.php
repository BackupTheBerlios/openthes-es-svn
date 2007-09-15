<a href="http://developer.berlios.de" title="BerliOS Developer"> <img src="http://developer.berlios.de/bslogo.php?group_id=8872" width="124px" height="32px" border="0" alt="BerliOS Developer Logo"></a>
<table cellpadding="0" cellspacing="0" class="navtable">
<tr>
	<td width="30%">
		&nbsp;<span style="color:#888888"><?php 
		if( function_exists('starttimer') ) {
			endtimer();
		}
		?></span>
	</td>
	<td align="center" width="40%">
		<?php if( WEB_LANG == 'de_DE' ) { ?>
			<span style="color:#888888">Server sponsored by
			<a href="http://www.intrafind.de">IntraFind</a></span>
		<?php } ?>
	</td>
	<td align="right" width="30%">
		<?php print EMAIL ?>
	</td>
</tr>
</table>

<?php if( !isset($page) || ($page != "homepage" && $page != "login" && $page != "get_delete_comment")) { ?>
	<script language="JavaScript" type="text/javascript">
	<!--
	document.forms['searchform']['word'].focus();
	// -->
	</script>
<?php } ?>

</body>
</html>
