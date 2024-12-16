<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Votex Premium");
?><?$APPLICATION->IncludeComponent(
	"placestart:page.head",
	"",
Array()
);?><?$APPLICATION->IncludeComponent(
	"placestart:votex.premium",
	"",
	Array(
		"CACHE_TIME" => "3600000",
		"CACHE_TYPE" => "A",
		"IS_PAGE_BLOCK" => "N"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>