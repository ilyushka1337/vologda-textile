<?
global $APPLICATION;
$APPLICATION->SetPageProperty('SECTION_DESCRIPTION', $arResult['DESCRIPTION']);

if ($arResult['TEXT_CODE']) {
    $APPLICATION->SetPageProperty('SECTION_TEXT_CODE', $arResult['TEXT_CODE']);
}