<ul class="<?=$class?>">
<?php
include_once ('cut_str.php');
	foreach ($menuArr as $element) :
		$nameElement = $element['title'];
		$path = '/route/' . $nameElement . '/';
		cutStr($nameElement);
		$textDecoration = ($_SERVER['REQUEST_URI'] == $path) ? ('underline') : ('none');
?>
	<li><a href="<?=$path?>"><font color="teal" style="font-size :<?=$size?>px;" style="text-decoration: <?=$textDecoration?>"><?=$nameElement?></font></a></li>
<?php
endforeach;
?>
</ul>
