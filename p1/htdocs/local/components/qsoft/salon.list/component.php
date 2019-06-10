<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();


if(strlen($arParams["IBLOCK_TYPE"]) <= 0) {
	ShowError(\Bitrix\Main\Localization\Loc::GetMessage('IBLOCK_TYPE_NOT_INSTALLED'));
	return;
}

if($arParams["IBLOCK_ID"]<=0) {
	ShowError(\Bitrix\Main\Localization\Loc::GetMessage('T_SALONS_SALONS_NA'));
	return;
}

if(! \Bitrix\Main\Loader::includeModule('iblock')) {
	ShowError(\Bitrix\Main\Localization\Loc::GetMessage('IBLOCK_MODULE_NOT_INSTALLED'));
	return;
}

if($arParams["SALONS_COUNT"] <= 0) {
	$arParams["SALONS_COUNT"] = 2;
}

if(strlen($arParams["SORT_BY"]) <= 0) {
	$arParams["SORT_BY"] = "RAND";
}

if(strlen($arParams["SORT_ORDER"]) <= 0) {
	$arParams["SORT_ORDER"] = "DESC";
}

if ($this->startResultCache()) {

	$select = [
			"ID",
			"IBLOCK_ID",
			"NAME",
			"DETAIL_TEXT",
			"DETAIL_TEXT_TYPE",
			"DETAIL_PAGE_URL",
			"PREVIEW_TEXT",
			"PREVIEW_PICTURE",
			"PROPERTY_ADDRESS",
			"PROPERTY_PHONE",
			"PROPERTY_WORK_HOURS",
			"DETAIL_PAGE_URL"
		];


	$dbItem = \CIBlockElement::GetList(
	[$arParams["SORT_BY"] => $arParams['SORT_ORDER']],
	[
		'IBLOCK_ID' => $arParams['IBLOCK_ID'],
		'ACTIVE' => 'Y',
	],
	false,
	['nTopCount' => $arParams['SALONS_COUNT']],
	$select
	);
	
	$items = [];
	while ($item = $dbItem->GetNext(true, false)) {
			$arButtons = CIBlock::GetPanelButtons(
				$item["IBLOCK_ID"],
				$item["ID"],
				0,
				array("SECTION_BUTTONS"=>false, "SESSID"=>false)
			);

			$item["EDIT_LINK"] = $arButtons["edit"]["edit_element"]["ACTION_URL"];
			$item["DELETE_LINK"] = $arButtons["edit"]["delete_element"]["ACTION_URL"];

			if ($item['PREVIEW_PICTURE'] != null) {
				$filter[] = $item['PREVIEW_PICTURE']; 
			}
		$items[] = $item;
	}

	if (!empty($filter)) {
		$filter = implode(', ', $filter);

		$tmp = CFile::GetList([], ["@ID" => $filter]);

		while ($pict = $tmp->GetNext()) {
			$arResult['SRCS'][$pict['ID']] = CFile::GetFileSrc($pict);
		}
	}

	$arResult['ITEMS'] = $items;
	
	$this->setResultCacheKeys([]);

	$this->includeComponentTemplate();

}


$arButtons = CIBlock::GetPanelButtons(
			$arParams["IBLOCK_ID"],	
			0,
			0,
			array("SECTION_BUTTONS"=>false, "SESSID"=>false)
		);
if($APPLICATION->GetShowIncludeAreas()){
	$this->addIncludeAreaIcons(CIBlock::GetComponentMenu($APPLICATION->GetPublicShowMode(), $arButtons));
}
?>
