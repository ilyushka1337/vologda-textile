<?
use Placestart\Core\Utils;

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