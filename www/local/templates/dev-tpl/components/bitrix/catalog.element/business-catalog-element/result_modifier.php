<?
use Placestart\Core\Utils;
use Bitrix\Iblock\Elements\ElementCatalogTable;

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogElementComponent $component
 */

$component = $this->getComponent();
$component->setResultCacheKeys(['TEXT_CODE']);
$arParams = $component->applyTemplateModifications();

foreach ($arResult['OFFERS'] as $i => $offer) {
    if ($offer['PROPERTIES']['PREVIEW_GALLERY']['VALUE']) {
        $imgs = [];
        foreach ($offer['PROPERTIES']['PREVIEW_GALLERY']['VALUE'] as $imgID) {
            $img = Utils::resizeImage($imgID, 570, 760);
            $imgs[] = $img['SRC'];
        }
        $arResult['OFFERS'][$i]['PROPERTIES']['PREVIEW_GALLERY']['VALUE'] = $imgs;
    }
}

$skuProps = [];
foreach ($arResult['SKU_PROPS'] as $prop) {
    unset($prop['USER_TYPE_SETTINGS']);
    $skuProps[] = $prop;
}
$arResult['SKU_PROPS'] = $skuProps;

$element = (ElementCatalogTable::getList([
    'filter' => ['ID' => $arResult['ID']],
    'select' => ['SEO_TEXT_CODE_' => 'SEO_TEXT_CODE'],
    'limit' => 1
]))->fetch();

if (isset($element['SEO_TEXT_CODE_VALUE'])) {
    $arResult['TEXT_CODE'] = $element['SEO_TEXT_CODE_VALUE'];
}