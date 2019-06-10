<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '';

$strReturn .= '<nav class="nav_chain">';

$itemSize = count($arResult);?>
<?php
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	$arrow = ($index > 0? '<span class="nav_arrow inline-block"></span>' : '');

	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
		 $strReturn .= '
				'.$arrow.'
				<a href="'.$arResult[$index]["LINK"].'" title="'.$title.'">
					<span itemprop="name">'.$title.'</span>
				</a>
			';
	}
	else
	{
		$strReturn .= '
				'.$arrow.'
				<span itemprop="name">'.$title.'</span>
			';
	}

}?>
<?php
$strReturn .= '</nav>';

return $strReturn;
?>
