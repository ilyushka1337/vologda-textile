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
	"",
	array(
		"CACHE_TIME" => "3600000",
		"CACHE_TYPE" => "A",
		"IS_PAGE_BLOCK" => "Y"
	)
); ?>
<? $APPLICATION->IncludeComponent(
	"placestart:company.history",
	"",
	array()
); ?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>