<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("О комбинате");
?>
<? $APPLICATION->IncludeComponent(
	"placestart:page.head",
	"",
	array()
); ?>
<? $APPLICATION->IncludeComponent(
	"placestart:about.company",
	"",
	array(
		"CACHE_TIME" => "3600000",
		"CACHE_TYPE" => "A",
		"IS_PAGE_BLOCK" => "Y"
	)
); ?>
<? $APPLICATION->IncludeComponent(
	"placestart:advantages.section",
	"about",
	array(
		"CACHE_TIME" => "3600000",
		"CACHE_TYPE" => "A",
		"IS_PAGE_BLOCK" => "Y"
	)
); ?>
<? $APPLICATION->IncludeComponent(
	"placestart:texts.block", 
	".default", 
	array(
		"CACHE_TIME" => "3600000",
		"CACHE_TYPE" => "A",
		"IS_PAGE_BLOCK" => "Y",
		"COMPONENT_TEMPLATE" => ".default",
		"ELEMENT_CODES" => array(
			0 => "moshchnost-kombinata",
			1 => "osnashchenie-predpriyatiya",
			2 => "vypuskaemaya-produktsiya",
			3 => "kontrol-za-kachestvom-produktsii",
		)
	),
	false
); ?>
<? $APPLICATION->IncludeComponent(
	"placestart:company.history",
	"",
	array()
); ?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>