<div class="clearfix">
        	<?php putMenu($menuArr, 'main-menu bottom', 12, SORT_DESC) ?>
	</div>
<div class="footer">&copy;&nbsp;<nobr>2018</nobr> Project.</div>
</body>
</html>
<?php
if (isset($connect)) {
	mysqli_close($connect);
}
?>
