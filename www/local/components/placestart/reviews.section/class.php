<?php
namespace Placestart\Components;

use Bitrix\Iblock\Elements\ElementReviewsTable;
use Bitrix\Iblock\IblockTable;
use Bitrix\Main\Loader;
use Placestart\Core\Component\Boilerplate;
use Placestart\Core\Component\Parameters;
use Placestart\Core\Utils;

class ReviewsSectionComponent extends Boilerplate
{
    protected static $name = "Отзывы";

    public function __construct($component = null)
    {
        parent::__construct($component);
        Loader::requireModule('sprint.options');
    }

    protected function getData()
    {
        $this->arResult['REVIEWS'] = [];
        $q = ElementReviewsTable::getList([
            'select' => ['PREVIEW_PICTURE'],
        ]);

        while ($slide = $q->fetchObject()) {
            $this->arResult['REVIEWS'][] = [
                'IMG' => Utils::resizeImage($slide->getPreviewPicture(), 600, 600, 'proportional'),
            ];
        }

        $this->arResult['SITE_WILDBERRIES'] = sprint_options_get('SITE_WILDBERRIES');
        $this->arResult['SITE_OZON'] = sprint_options_get('SITE_OZON');
    }

    public static function getComponentParameters(): Parameters
    {
        $params = new Parameters();
        $params->group('DATA', 'Параметры', 100, [
            'IS_PAGE_BLOCK' => $params->checkbox('Добавить отступы блока'),
            'TITLE' => $params->string('Заголовок')
        ]);
        return $params;
    }
}