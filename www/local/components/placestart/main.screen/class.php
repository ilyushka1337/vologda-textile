<?php
namespace Placestart\Components;

use Bitrix\Iblock\Elements\ElementSliderTable;
use Placestart\Core\Component\Boilerplate;
use Placestart\Core\Component\Parameters;
use Placestart\Core\Utils;

class MainScreenComponent extends Boilerplate
{
    protected static $name = "Главный экран";

    protected function getData()
    {
        $this->arResult['SLIDES'] = [];
        $q = ElementSliderTable::getList([
            'select' => ['NAME', 'PREVIEW_TEXT', 'PREVIEW_PICTURE', 'TITLE', 'LINK', 'PHONE_IMG', 'TABLET_IMG'],
            'order' => ['SORT']
        ]);

        while ($slide = $q->fetchObject()) {
            $this->arResult['SLIDES'][] = [
                'TITLE' => $slide->getTitle(),
                'TEXT' => $slide->getPreviewText(),
                'LINK' => $slide->getLink()?->getValue(),
                'IMG' => Utils::resizeImage($slide->getPreviewPicture(), 1720, 670, 'proportional'),
                'TABLET_IMG' => Utils::resizeImage($slide->getTabletImg()?->getValue(), 895, 450, 'proportional'),
                'PHONE_IMG' => Utils::resizeImage($slide->getPhoneImg()?->getValue(), 540, 720, 'proportional')
            ];
        }
    }

    public static function getComponentParameters(): Parameters
    {
        $params = new Parameters();
        $params->group('DATA', '', 100, [
            'IS_PAGE_BLOCK' => $params->checkbox('Добавить отступы блока')
        ]);
        return $params;
    }
}