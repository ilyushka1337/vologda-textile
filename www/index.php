<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("1С-Битрикс: Управление сайтом");
?>
<? $APPLICATION->IncludeComponent('placestart:main.screen', '', [
    "CACHE_TIME" => "3600000",
    "CACHE_TYPE" => "A",
    "IS_PAGE_BLOCK" => "Y"
]);
?>
<? $APPLICATION->IncludeComponent('placestart:main.directions', '', [
    "CACHE_TIME" => "3600000",
    "CACHE_TYPE" => "A",
    "IS_PAGE_BLOCK" => "Y"
]);
?>
<? $APPLICATION->IncludeComponent(
	"placestart:votex.sections", 
	".default", 
	array(
		"CACHE_TIME" => "3600000",
		"CACHE_TYPE" => "A",
		"IS_PAGE_BLOCK" => "N",
		"COMPONENT_TEMPLATE" => ".default",
		"TEXT_1_CODE" => "glavnaya-o-brende-pervyy-tekst",
		"TEXT_2_CODE" => "glavnaya-o-brende-vtoroy-tekst"
	),
	false
);
?>
<? $APPLICATION->IncludeComponent('placestart:new.section', '', [
    "CACHE_TIME" => "3600000",
    "CACHE_TYPE" => "N",
    "IS_PAGE_BLOCK" => "Y",
    "TITLE" => "Новинки"
]);
?>
<? $APPLICATION->IncludeComponent('placestart:reviews.section', '', [
    "CACHE_TIME" => "3600000",
    "CACHE_TYPE" => "A",
    "IS_PAGE_BLOCK" => "Y"
]);
?>
<? $APPLICATION->IncludeComponent(
    "placestart:about.section",
    ".default",
    array(
        "CACHE_TIME" => "3600000",
        "CACHE_TYPE" => "A",
        "IS_PAGE_BLOCK" => "Y",
        "COMPONENT_TEMPLATE" => ".default",
        "ABOUT_ELEMENT_CODE" => "o-kombinate",
        "PRODUCTION_ELEMENT_CODE" => "proizvodstvo",
        "PARTNERSHIP_ELEMENT_CODE" => "partnyeram"
    ),
    false
);
?>
<? $APPLICATION->IncludeComponent(
	"placestart:fabrics.section", 
	".default", 
	array(
		"CACHE_TIME" => "3600000",
		"CACHE_TYPE" => "A",
		"IS_PAGE_BLOCK" => "Y",
		"COMPONENT_TEMPLATE" => ".default",
		"TITLE" => "Ткани",
		"TEXT_1_CODE" => "glavnaya-tkani-pervyy-tekst",
		"TEXT_2_CODE" => "glavnaya-tkani-vtoroy-tekst"
	),
	false
);
?>
<? $APPLICATION->IncludeComponent('placestart:advantages.section', '', [
    "CACHE_TIME" => "3600000",
    "CACHE_TYPE" => "A",
    "IS_PAGE_BLOCK" => "Y"
]);
?>
<? $APPLICATION->IncludeComponent('placestart:news.section', '', [
    "CACHE_TIME" => "3600000",
    "CACHE_TYPE" => "A",
    "IS_PAGE_BLOCK" => "Y"
]);
?>
<? $APPLICATION->IncludeComponent('placestart:seo.section', '', [
    "CACHE_TIME" => "3600000",
    "CACHE_TYPE" => "A",
    "IS_PAGE_BLOCK" => "Y",
    "ELEMENT_CODE" => "seo-zagolovok-dlya-primera-v-dve-strochki",
    "IMG_POSITION" => "right"
]);
?>
<? $APPLICATION->IncludeComponent(
	"placestart:partners.section", 
	".default", 
	array(
		"CACHE_TIME" => "3600000",
		"CACHE_TYPE" => "A",
		"IS_PAGE_BLOCK" => "Y",
		"COMPONENT_TEMPLATE" => ".default",
		"TITLE" => "Нам доверяют более 5000 партнеров"
	),
	false
);
?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>