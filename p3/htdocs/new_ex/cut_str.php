<?php
function cutStr(&$str, $maxLen = 12)
{
	if (strlen($str) > $maxLen) {
		$str = substr($str, 0, $maxLen) . '...';
	}
}
?>
