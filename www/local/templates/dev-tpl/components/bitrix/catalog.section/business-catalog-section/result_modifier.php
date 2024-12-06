<?
use Bitrix\Iblock\Model\Section;
use Bitrix\Iblock\Iblock;
use Placestart\Core\Utils;

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogSectionComponent $component
 */

$component = $this->getComponent();
$component->setResultCacheKeys(['DESCRIPTION', 'TEXT_CODE']);

/**
 * @var Bitrix\Iblock\SectionTable $e
 */
$e = Section::compileEntityByIblock($arParams['IBLOCK_ID']);

if ($arResult['ID'] > 0) {
    $result = $e::getList([
        'select' => ['UF_SEO_TEXT', 'ID'],
        'filter' => [
            'ID' => $arResult['ID']
        ],
        'limit' => 1
    ]);

    if ($section = $result->fetch()) {
        $arResult['TEXT_CODE'] = $section['UF_SEO_TEXT'];
    }
}