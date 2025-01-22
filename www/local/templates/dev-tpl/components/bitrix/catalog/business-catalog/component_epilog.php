<?php
if ($arResult['IS_PARENT_SECTION']) {
    if (isset($arResult['SEO_PROPS']['SECTION_META_TITLE'])) {
        $APPLICATION->SetPageProperty('title', $arResult['SEO_PROPS']['SECTION_META_TITLE']);
    }

    if (isset($arResult['SEO_PROPS']['SECTION_META_DESCRIPTION'])) {
        $APPLICATION->SetPageProperty('description', $arResult['SEO_PROPS']['SECTION_META_DESCRIPTION']);
    }
}