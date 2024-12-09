<?
use Placestart\Core\Utils;

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogElementComponent $component
 */

$component = $this->getComponent();
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