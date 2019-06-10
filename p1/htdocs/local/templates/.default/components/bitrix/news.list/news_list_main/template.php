<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */

$this->setFrameMode(true);
?>

<?php IncludeTemplateLangFile(__FILE__);?>
<h2 class="inline-block"><?=GetMessage('NEWS')?></h2>
<span class="all_list">&nbsp;/&nbsp;
	<a href="<?=$arResult["LIST_PAGE_URL"]?>" class="text_decor_none"><b><?=GetMessage('ALL')?></b></a>
</span>
<div>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<figure class="news_item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
		<?if(is_array($arItem["PREVIEW_PICTURE"]) && isset($arItem["PREVIEW_PICTURE"]["SRC"])):?>
			<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"/>
		<?else:?>
			<img src="<?=PATH_DEFAULT_PIC?>"/>
		<?endif?>
		</a>
		<figcaption class="news_item_description">
			<a style="text-decoration: none;" href="<?=$arItem["DETAIL_PAGE_URL"]?>"><b><?=$arItem["NAME"]?></b></a><br />
			<div class="news_item_anons">
			<a style="text-decoration: none;" href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["PREVIEW_TEXT"];?></a>
			</div>
				<div class="news_item_date grey"><?=$arItem["DISPLAY_ACTIVE_FROM"]?></div>
		</figcaption>
	</figure>
	<?endforeach;?>
</div>
