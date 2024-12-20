<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Сотрудничество");
?><?$APPLICATION->IncludeComponent(
	"placestart:page.head",
	"",
Array()
);?>
<?$APPLICATION->IncludeComponent(
	"placestart:partnership.section",
	"",
	Array(
		"CACHE_TIME" => "3600000",
		"CACHE_TYPE" => "A",
		"IS_PAGE_BLOCK" => "Y"
	)
);?><?$APPLICATION->IncludeComponent(
	"placestart:partnership.advantages",
	"",
Array()
);?><?$APPLICATION->IncludeComponent(
	"placestart:partners.section",
	"",
	Array(
		"CACHE_TIME" => "3600000",
		"CACHE_TYPE" => "A",
		"IS_PAGE_BLOCK" => "Y"
	)
);?><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>