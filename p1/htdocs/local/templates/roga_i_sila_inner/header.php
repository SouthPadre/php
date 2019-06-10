<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/local/templates/roga_i_sila_main/header.php');

?>

<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumbs_qsoft", Array(
	"COMPONENT_TEMPLATE" => ".default",
		"START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
		"PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
		"SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
	),
	false
);?>

<section class="content_area">
<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"menu_left", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "bottom",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "menu_left"
	),
	false
);?>			
			
<h1><?$APPLICATION->ShowTitle();?></h1>

