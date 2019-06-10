<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

	<?php if (SITE_TEMPLATE_ID == "roga_i_sila_inner") :?>
			</section>
				<hr class="bottom_line"/>
				<?php endif?>
	</div>

		</section>

		<div class="d_footer width_960"></div>
			<div class="clear"></div>
	<footer class="footer width_960">
			<section class="float_inner bottom_block">
				

			

					<?$APPLICATION->IncludeComponent(
	"qsoft:salon.list", 
	"stores_short", 
	array(
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "salons",
		"SALONS_COUNT" => "2",
		"DETAIL_URL" => "/company/stores/",
		"COMPONENT_TEMPLATE" => "stores_short",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"SORT_BY" => "RAND",
		"SORT_ORDER" => "DESC"
	),
	false
);?>
			
					
				<section class="info_block left_block_shadow">
					<?$APPLICATION->IncludeComponent(
						"bitrix:menu",
						"menu_footer",
						Array(
							"ALLOW_MULTI_SELECT" => "N",
							"CHILD_MENU_TYPE" => "left",
							"DELAY" => "N",
							"MAX_LEVEL" => "1",
							"MENU_CACHE_GET_VARS" => array(""),
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_TYPE" => "A",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"ROOT_MENU_TYPE" => "bottom",
							"USE_EXT" => "N",
							"COMPONENT_TEMPLATE" => "menu_footer"
						)
					);?>
				</section>
			</section>
			<div class="footer_inner">
				<a href="http://www.qsoft.ru" target="_blank" class="qsoft grey inline-block">Сделано в</a>
				<div class="copy">&copy; 2013 Рога &amp; Сила. Продажа автомобилей.</div>
			</div>
		</footer>
	</body>
</html>