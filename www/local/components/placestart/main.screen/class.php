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
            'select' => ['NAME', 'PREVIEW_TEXT', 'PREVIEW_PICTURE', 'TITLE', 'LINK']
        ]);

        while ($slide = $q->fetchObject()) {
            $this->arResult['SLIDES'][] = [
                'TITLE' => $slide->getTitle(),
                'TEXT' => $slide->getPreviewText(),
                'LINK' => $slide->getLink()->getValue(),
                'IMG' => Utils::resizeImage($slide->getPreviewPicture(), 1722, 670, 'proportional')
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