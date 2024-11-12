<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Обработка персональных данных");
?><?$APPLICATION->IncludeComponent(
	"placestart:page.head",
	"",
	Array(
		"CACHE_TIME" => "3600000",
		"CACHE_TYPE" => "A"
	)
);?><?$APPLICATION->IncludeComponent(
	"pages:personal.data",
	"",
	Array(
		"ADDRESS" => "test123",
		"CACHE_TIME" => "3600000",
		"CACHE_TYPE" => "A",
		"COMPANY" => "Нии Тех"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>