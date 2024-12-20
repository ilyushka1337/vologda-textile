<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("О бренде");
?>
<? $APPLICATION->IncludeComponent(
	"placestart:page.head",
	"",
	array()
); ?>
<? $APPLICATION->IncludeComponent(
	"placestart:about.brand",
	"",
	array(
		"CACHE_TIME" => "3600000",
		"CACHE_TYPE" => "A",
		"IS_PAGE_BLOCK" => "Y"
	)
); ?>
<? $APPLICATION->IncludeComponent(
	"placestart:reviews.section",
	"",
	array(
		"CACHE_TIME" => "3600000",
		"CACHE_TYPE" => "A",
		"IS_PAGE_BLOCK" => "Y"
	)
); ?>
<? $APPLICATION->IncludeComponent(
	"placestart:seo.section",
	"",
	array(
		"CACHE_TIME" => "3600000",
		"CACHE_TYPE" => "A",
		"ELEMENT_CODE" => "seo-zagolovok-dlya-primera-v-dve-strochki",
		"IMG_POSITION" => "right",
		"IS_PAGE_BLOCK" => "Y"
	)
); ?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>