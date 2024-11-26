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