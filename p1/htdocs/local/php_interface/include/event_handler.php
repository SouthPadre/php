<?php
// файл /bitrix/php_interface/init.php
// регистрируем обработчик
AddEventHandler("main", "OnAfterUserAuthorize", Array("MailNotify", "OnAfterUserAuthorizeHandler"));

class MailNotify
{
    // создаем обработчик события "OnAfterUserAuthorize"
    function OnAfterUserAuthorizeHandler($arUser)
    {
   	$arEventFields = array(
    	"EMAIL_TO"  => $arUser['user_fields']["EMAIL"],
    	"NNAME"		=> $arUser['user_fields']["LOGIN"],
    	"N_DATE"	=> date("Y.d.m H:i:s")
    );
	CEvent::Send("LOGIN", SITE_ID, $arEventFields);
    }
}
?>