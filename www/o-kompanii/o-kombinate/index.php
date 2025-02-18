<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("О комбинате");
?><?$APPLICATION->IncludeComponent(
	"placestart:page.head",
	"",
Array()
);?>
<?$APPLICATION->IncludeComponent(
	"placestart:about.company",
	"",
	Array(
		"CACHE_TIME" => "3600000",
		"CACHE_TYPE" => "A",
		"ELEMENT_CODE" => "vologodskiy-tekstilnyy-kombinat-vologda-textile-factory",
		"IS_PAGE_BLOCK" => "Y"
	)
);?>
<?$APPLICATION->IncludeComponent(
	"placestart:advantages.section",
	"about",
	Array(
		"CACHE_TIME" => "3600000",
		"CACHE_TYPE" => "A",
		"IS_PAGE_BLOCK" => "Y"
	)
);?>
<?$APPLICATION->IncludeComponent(
	"placestart:texts.block",
	".default",
	Array(
		"CACHE_TIME" => "3600000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => ".default",
		"ELEMENT_CODES" => array(0=>"moshchnost-kombinata",1=>"osnashchenie-predpriyatiya",2=>"vypuskaemaya-produktsiya",3=>"kontrol-za-kachestvom-produktsii",),
		"IS_PAGE_BLOCK" => "Y"
	)
);?>
<?$APPLICATION->IncludeComponent(
	"placestart:company.history",
	"",
Array()
);?><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>