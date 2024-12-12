<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Вакансии");
?><?$APPLICATION->IncludeComponent(
	"placestart:page.head",
	"",
	Array(
		"CACHE_TIME" => "3600000",
		"CACHE_TYPE" => "A"
	)
);?><?$APPLICATION->IncludeComponent(
	"placestart:vacancies.section",
	"",
	Array(
		"CACHE_TIME" => "3600000",
		"CACHE_TYPE" => "A",
		"IS_PAGE_BLOCK" => "N"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>