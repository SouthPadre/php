<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<nav class="main_menu">
	<ul>
<?
$previousLevel = 0;
foreach($arResult as $arItem):?>
	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>
		<li class="<?=($arItem["SELECTED"]) ? 'submenu current' : 'submenu pie'?>">
		<span><?=$arItem["TEXT"]?></span>
			<div class="submenu_border"></div>
			<ul>
	<?else:?>
		<?if ($arItem["SELECTED"]):?>
			<li class="current"><span><?=$arItem["TEXT"]?></span></li>
		<?else:?>
			<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
		<?endif?>
	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>


	</ul>
</nav>
<?endif?>
<?//var_dump($arResult);?>