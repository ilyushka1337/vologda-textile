<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("1С-Битрикс: Управление сайтом");

$APPLICATION->IncludeComponent('placestart:main.screen', '', []);
$APPLICATION->IncludeComponent('placestart:main.directions', '', []);
$APPLICATION->IncludeComponent('placestart:votex.sections', '', []);

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");