<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
?>

</main>

<? $APPLICATION->IncludeComponent(
    "bitrix:catalog.section.list",
    "catalog-tree-menu",
    array(
        "ADDITIONAL_COUNT_ELEMENTS_FILTER" => "",
        "ADD_SECTIONS_CHAIN" => "N",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "N",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "COUNT_ELEMENTS" => "Y",
        "COUNT_ELEMENTS_FILTER" => "CNT_ALL",
        "FILTER_NAME" => "",
        "HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
        "IBLOCK_ID" => \Placestart\Core\Utils::locateIblock('catalog'),
        "IBLOCK_TYPE" => "catalog",
        "SECTION_CODE" => "",
        "SECTION_FIELDS" => array("", ""),
        "SECTION_ID" => "",
        "SECTION_URL" => "",
        "SECTION_USER_FIELDS" => array("", ""),
        "SHOW_PARENT_NAME" => "Y",
        "TOP_DEPTH" => "3",
        "VIEW_MODE" => "LIST"
    )
); ?>

</div>

</body>

</html>