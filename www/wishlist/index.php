<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Избранное");
?><?$APPLICATION->IncludeComponent(
	"placestart:page.head",
	"",
	Array(
		"CACHE_TIME" => "3600000",
		"CACHE_TYPE" => "A"
	)
);?><?$APPLICATION->IncludeComponent(
	"placestart:wishlist.section",
	"",
	Array(
		"CACHE_TIME" => "3600000",
		"CACHE_TYPE" => "N",
		"FILTER_NAME" => "wishlistFilter"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>