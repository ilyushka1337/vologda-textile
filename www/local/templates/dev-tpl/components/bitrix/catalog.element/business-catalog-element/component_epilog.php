<?
global $APPLICATION;

if (isset($arResult['TEXT_CODE'])) {
    $APPLICATION->SetPageProperty('ELEMENT_TEXT_CODE', $arResult['TEXT_CODE']);
}