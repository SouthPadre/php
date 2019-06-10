<?php
function dirNameU($dir)
{
	$name = basename($dir);
	cutStr($name);
return ($name);
}
?>