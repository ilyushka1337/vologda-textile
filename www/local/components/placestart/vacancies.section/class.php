<?php
namespace Placestart\Components;

use Bitrix\Iblock\Elements\ElementVacanciesTable;
use Bitrix\Iblock\IblockTable;
use Placestart\Core\Component\Boilerplate;
use Placestart\Core\Component\Parameters;
use Placestart\Core\Utils;

class VacanciesSectionComponent extends Boilerplate
{
    protected static $name = "Вакансии";

    protected function getData()
    {
        $this->arResult['NEWS'] = [];
        $q = ElementVacanciesTable::getList([
            'select' => ['NAME', 'PREVIEW_TEXT', 'PAYMENT', 'HH_LINK'],
            'limit' => 99
        ]);

        while ($element = $q->fetchObject()) {
            $this->arResult['VACANCIES'][] = [
                'TITLE' => $element->getName(),
                'TEXT' => $element->getPreviewText(),
                'PAYMENT' => $element->getPayment()->getValue(),
                'HH_LINK' => $element->getHhLink()->getValue(),
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