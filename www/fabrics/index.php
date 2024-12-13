<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Ткани");
?>
<? $APPLICATION->IncludeComponent(
	"placestart:page.head",
	"",
	array()
); ?>
<? $APPLICATION->IncludeComponent(
	"placestart:fabrics.intro",
	"",
	array(
		"CACHE_TIME" => "3600000",
		"CACHE_TYPE" => "A",
		"IS_PAGE_BLOCK" => "Y"
	)
); ?>
<? $APPLICATION->IncludeComponent(
	"placestart:service.types",
	"",
	array(
		"CACHE_TIME" => "3600000",
		"CACHE_TYPE" => "A",
		"IS_PAGE_BLOCK" => "Y"
	)
); ?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>