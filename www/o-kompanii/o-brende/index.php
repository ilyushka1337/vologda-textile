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
	".default", 
	array(
		"CACHE_TIME" => "3600000",
		"CACHE_TYPE" => "A",
		"IS_PAGE_BLOCK" => "Y",
		"COMPONENT_TEMPLATE" => ".default",
		"TEXT_1_CODE" => "o-brende-nash-brend-pervyy-tekst",
		"TEXT_2_CODE" => "o-brende-nash-brend-vtoroy-tekst",
		"TEXT_3_CODE" => "o-brende-nash-brend-tretiy-tekst"
	),
	false
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