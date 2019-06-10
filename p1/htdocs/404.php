<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");
define("HIDE_SIDEBAR", true);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Страница не найдена");?><div class="bx-404-container">
	<div class="bx-404-block">
 <img src="<?=SITE_DIR?>images/404.png" alt="">
	</div>
	<div class="bx-404-text-block">
		 К сожалению, такая страница не найдена. Данная страница была удалена с сайта, либо ее никогда не существовало. 
	</div>
	<div>
		Вы можете вернуться на <a href="<?=SITE_DIR?>">Главную страницу</a> или воспользоваться  <a href="<?=SITE_DIR?>search/">поиском</a>. Если Вы хотите что-то сообщить, напишите нам с помощью формы Обратная связь <a href="<?=SITE_DIR?>company/contacts">Контактная информация</a>.
	
	</div>
</div>

<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
