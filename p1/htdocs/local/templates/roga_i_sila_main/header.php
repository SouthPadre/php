<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE>
<!--[if IE 7]>    <html class="ie7"> <![endif]-->
<!--[if IE 8]>    <html class="ie8> <![endif]-->
<!--[if IE 9]>    <html class="ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
	<head>
 <?$APPLICATION->ShowHead();?> 

		<!-- <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
		 -->
		<?php

		 use Bitrix\Main\Page\Asset;
		Asset::getInstance()->addString( '<link href="' . PATH_DEFAULT_JS_CSS . 'favicon.ico" rel="shortcut icon" type="image/x-icon"/>');

		Asset::getInstance()->addJs(PATH_DEFAULT_JS . "jquery-1.9.1.min.js");
		Asset::getInstance()->addJs(PATH_DEFAULT_JS . "jquery.placeholder.js");
		Asset::getInstance()->addJs(PATH_DEFAULT_JS . "bxslider/jquery.bxslider.js");
		Asset::getInstance()->addJs(PATH_DEFAULT_JS . "default_script.js");
		
		Asset::getInstance()->addJs(PATH_DEFAULT_JS . "jquery.ui.selectmenu/jquery.ui.core.js");
		Asset::getInstance()->addJs(PATH_DEFAULT_JS . "jquery.ui.selectmenu/jquery.ui.widget.js");
		Asset::getInstance()->addJs(PATH_DEFAULT_JS . "jquery.ui.selectmenu/jquery.ui.position.js");
		Asset::getInstance()->addJs(PATH_DEFAULT_JS . "jquery.ui.selectmenu/jquery.ui.selectmenu.js");

		Asset::getInstance()->addCss(PATH_DEFAULT_CSS . "base.css");
		Asset::getInstance()->addCss(PATH_DEFAULT_JS . "bxslider/jquery.bxslider.css");
		Asset::getInstance()->addCss(PATH_DEFAULT_JS . "jquery.ui.selectmenu/jquery.ui.core.css");
		Asset::getInstance()->addCss(PATH_DEFAULT_JS . "jquery.ui.selectmenu/jquery.ui.theme.css");
		Asset::getInstance()->addCss(PATH_DEFAULT_JS . "jquery.ui.selectmenu/jquery.ui.selectmenu.css");
		?>

		<!--[if lt IE 9]>
			<script src="/local/templates/.default/js/html5shiv.js"></script>
		<![endif]-->


	<title><?$APPLICATION->ShowTitle()?></title>

	</head>
	<body>
 	<?$APPLICATION->ShowPanel();?> 
		<div class="wrapper">
			<div class="base_layer"></div>
			<header class="header">
				<div class="width_960">
					<div class="inline-block">
				<?php if ($APPLICATION->GetCurPage() !== '/') :?>
						<a href="/" class="logo inline-block"></a>
				<?php else:?>
						<span class="logo inline-block"></span>
				<?php endif?>
					</div>

					<?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form", 
	"auth_form_header", 
	array(
		"FORGOT_PASSWORD_URL" => "",
		"PROFILE_URL" => "/personal/",
		"REGISTER_URL" => "/auth/",
		"SHOW_ERRORS" => "N",
		"COMPONENT_TEMPLATE" => "auth_form_header",
		"PROFILE_PAGE" => "/personal/profile/"
	),
	false
);?>

					<div class="basket_block inline-block">
						<a href="#" class="basket_product_count inline-block">0</a>
						<a href="#" class="order_button pie">Оформить заказ</a>
					</div>
				</div>
			</header>
			<section class="fixed_block">
				<div class="width_960">
					<form name="search_form" class="search_form pie">
							<div class="search_form_wrapper">
								<input type="text" placeholder="Поиск по сайту"/>
								<input type="submit" value=""/>
							</div>
					</form>
					<?$APPLICATION->IncludeComponent("bitrix:menu", "catalog_top", Array(
						"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
							"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
							"DELAY" => "N",	// Откладывать выполнение шаблона меню
							"MAX_LEVEL" => "2",	// Уровень вложенности меню
							"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
								0 => "",
							),
							"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
							"MENU_CACHE_TYPE" => "A",	// Тип кеширования
							"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
							"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
							"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php

						),
						false
					);?>

				</div>
			</section>
			<section class="content">
				<div class="work_area width_960">
