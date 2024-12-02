<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?><?$APPLICATION->IncludeComponent(
	"placestart:page.head",
	"",
	Array(
		"CACHE_TIME" => "3600000",
		"CACHE_TYPE" => "A"
	)
);?><?$APPLICATION->IncludeComponent(
	"pages:text.page",
	"",
	Array(
		"CACHE_TIME" => "3600000",
		"CACHE_TYPE" => "A",
		"CONTENT_PROPERTY_CODE" => "CONTENT",
		"ELEMENT_CODE" => "primer-tekstovoy-stranitsy",
		"ELEMENT_ID" => "",
		"IBLOCK_ID" => "1"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>