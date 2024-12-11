<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("1С-Битрикс: Управление сайтом");

$APPLICATION->IncludeComponent('placestart:main.screen', '', [
    "CACHE_TIME" => "3600000",
    "CACHE_TYPE" => "A",
    "IS_PAGE_BLOCK" => "Y"
]);
$APPLICATION->IncludeComponent('placestart:main.directions', '', [
    "CACHE_TIME" => "3600000",
    "CACHE_TYPE" => "A",
    "IS_PAGE_BLOCK" => "Y"
]);
$APPLICATION->IncludeComponent('placestart:votex.sections', '', [
    "CACHE_TIME" => "3600000",
    "CACHE_TYPE" => "A",
    "IS_PAGE_BLOCK" => "N"
]);
$APPLICATION->IncludeComponent('placestart:products.section', '', [
    "CACHE_TIME" => "3600000",
    "CACHE_TYPE" => "A",
    "IS_PAGE_BLOCK" => "Y",
    "TITLE" => "Новинки"
]);
$APPLICATION->IncludeComponent('placestart:reviews.section', '', [
    "CACHE_TIME" => "3600000",
    "CACHE_TYPE" => "A",
    "IS_PAGE_BLOCK" => "Y"
]);
$APPLICATION->IncludeComponent('placestart:about.section', '', [
    "CACHE_TIME" => "3600000",
    "CACHE_TYPE" => "A",
    "IS_PAGE_BLOCK" => "Y"
]);
$APPLICATION->IncludeComponent('placestart:fabrics.section', '', [
    "CACHE_TIME" => "3600000",
    "CACHE_TYPE" => "A",
    "IS_PAGE_BLOCK" => "Y"
]);
$APPLICATION->IncludeComponent('placestart:advantages.section', '', [
    "CACHE_TIME" => "3600000",
    "CACHE_TYPE" => "A",
    "IS_PAGE_BLOCK" => "Y"
]);
$APPLICATION->IncludeComponent('placestart:news.section', '', [
    "CACHE_TIME" => "3600000",
    "CACHE_TYPE" => "A",
    "IS_PAGE_BLOCK" => "Y"
]);
$APPLICATION->IncludeComponent('placestart:seo.section', '', [
    "CACHE_TIME" => "3600000",
    "CACHE_TYPE" => "A",
    "IS_PAGE_BLOCK" => "Y",
    "ELEMENT_CODE" => "seo-zagolovok-dlya-primera-v-dve-strochki",
    "IMG_POSITION" => "right"
]);
$APPLICATION->IncludeComponent('placestart:partners.section', '', [
    "CACHE_TIME" => "3600000",
    "CACHE_TYPE" => "A",
    "IS_PAGE_BLOCK" => "Y"
]);

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");