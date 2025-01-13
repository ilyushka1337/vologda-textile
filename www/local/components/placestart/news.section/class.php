<?php
namespace Placestart\Components;

use Bitrix\Iblock\Elements\ElementNewsTable;
use Bitrix\Iblock\IblockTable;
use Placestart\Core\Component\Boilerplate;
use Placestart\Core\Component\Parameters;
use Placestart\Core\Utils;

class NewsSectionComponent extends Boilerplate
{
    protected static $name = "Новости";

    protected function getData()
    {
        $this->arResult['NEWS'] = [];
        $q = ElementNewsTable::getList([
            'select' => ['NAME', 'PREVIEW_TEXT', 'PREVIEW_PICTURE', 'ACTIVE_FROM', 'CODE'],
            'limit' => 3,
            'order' => [
                'ACTIVE_FROM' => 'DESC'
            ]
        ]);

        $iblock = IblockTable::getList([
            'filter' => ['API_CODE' => 'news'],
            'select' => ['DETAIL_PAGE_URL']
        ])->fetchObject();


        while ($slide = $q->fetchObject()) {
            $date = new \DateTime($slide->getActiveFrom());
            $this->arResult['NEWS'][] = [
                'TITLE' => $slide->getName(),
                'TEXT' => $slide->getPreviewText(),
                'ACTIVE_FROM' => $date->format('d.m.Y'),
                'IMG' => Utils::resizeImage($slide->getPreviewPicture(), 1722, 670, 'proportional'),
                'LINK' => str_replace(['#SITE_DIR#', '#ELEMENT_CODE#'], ['', $slide->getCode()], $iblock->getDetailPageUrl())
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