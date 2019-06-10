<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php IncludeTemplateLangFile(__FILE__);?>
<?if (!empty($arResult)):?>
<aside class="left_block">

	<nav>
		<ul class="left_menu">
			<li>
<span><?=GetMessage('INFORMATION')?></span>
<ul>
<?
foreach($arResult as $arItem):
?>
			<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
<?endforeach?>
</ul>
</li>
		</ul>
	</nav>
</aside>

<?endif?>

			