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

<?php if( !isset($page) || ($page != "homepage" && $page != "login" && $page != "get_delete_comment" && $page != "synset")) { ?>
	<script language="JavaScript" type="text/javascript">
	<!--
	document.forms['searchform']['word'].focus();
	// -->
	</script>
<?php } ?>

</body>
</html>
