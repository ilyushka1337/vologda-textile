<?php
use \Bitrix\Iblock\SectionTable;
use \Bitrix\Iblock\Model\Section;


if ($arResult['VARIABLES']['SECTION_ID'] > 0) {
    $q = SectionTable::getList([
        'filter' => [
            'IBLOCK_SECTION_ID' => $arResult['VARIABLES']['SECTION_ID']
        ],
        'select' => ['ID', 'NAME'],
        'limit' => 1
    ]);

    if ($q->fetch()) {
        $arResult['IS_PARENT_SECTION'] = true;
    } else {
        $arResult['IS_PARENT_SECTION'] = false;
    }
}
if ($arResult['IS_PARENT_SECTION']) {
    /**
     * @var Bitrix\Iblock\SectionTable $e
     */
    $e = Section::compileEntityByIblock($arParams['IBLOCK_ID']);

    $result = $e::getList([
        'select' => ['UF_SEO_TEXT', 'ID'],
        'filter' => [
            'ID' => $arResult['VARIABLES']['SECTION_ID']
        ],
        'limit' => 1
    ]);

    if ($section = $result->fetch()) {
        $arResult['TEXT_CODE'] = $section['UF_SEO_TEXT'];
    }
}