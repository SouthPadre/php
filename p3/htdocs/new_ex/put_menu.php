<?php
function putMenu($menuArr, $class, $size , $sort = SORT_ASC)
{
	arraySort($menuArr, $sort);
	include ('template_menu.php');
}
?>