<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Ткани");
?><?$APPLICATION->IncludeComponent(
	"placestart:page.head",
	"",
Array()
);?>
<?$APPLICATION->IncludeComponent(
	"placestart:fabrics.intro", 
	".default", 
	array(
		"CACHE_TIME" => "3600000",
		"CACHE_TYPE" => "A",
		"IS_PAGE_BLOCK" => "Y",
		"COMPONENT_TEMPLATE" => ".default",
		"TITLE" => "Ткани",
		"TEXT_1_CODE" => "stranitsa-tkani-tkani-pervyy-tekst",
		"TEXT_2_CODE" => "stranitsa-tkani-tkani-vtoroy-tekst"
	),
	false
);?>
<?$APPLICATION->IncludeComponent(
	"placestart:service.types",
	"",
	Array(
		"CACHE_TIME" => "3600000",
		"CACHE_TYPE" => "A",
		"IS_PAGE_BLOCK" => "Y"
	)
);?><?$APPLICATION->IncludeComponent(
	"placestart:textile.catalog",
	"",
	Array(
		"CACHE_TIME" => "3600000",
		"CACHE_TYPE" => "A",
		"IS_PAGE_BLOCK" => "Y"
	)
);?><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>