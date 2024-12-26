<?php
namespace Placestart\Components;

use Bitrix\Iblock\Elements\ElementPartnersTable;
use Placestart\Core\Component\Boilerplate;
use Placestart\Core\Component\Parameters;
use Placestart\Core\Utils;

class PartnersSectionComponent extends Boilerplate
{
    protected static $name = "Партнеры";

    protected function getData()
    {
        $this->arResult['PARTNERS'] = [];
        $q = ElementPartnersTable::getList([
            'select' => ['PREVIEW_PICTURE'],
        ]);

        while ($slide = $q->fetchObject()) {
            $this->arResult['PARTNERS'][] = [
                'IMG' => Utils::resizeImage($slide->getPreviewPicture(), 200, 110, 'proportional'),
            ];
        }
    }

    public static function getComponentParameters(): Parameters
    {
        $params = new Parameters();
        $params->group('DATA', '', 100, [
            'IS_PAGE_BLOCK' => $params->checkbox('Добавить отступы блока'),
            'TITLE' => $params->string('Заголовок')
        ]);
        return $params;
    }
}