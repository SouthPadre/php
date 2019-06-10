<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php IncludeTemplateLangFile(__FILE__);?>
<?if (!empty($arResult)):?>
<h2><?=GetMessage('INFORMATION')?></h2>
<nav class="grey">
	<ul>
<?
foreach($arResult as $arItem):
?>
		<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
<?endforeach?>
	</ul>
</nav>
<?endif?>