<?php
namespace Placestart\Components;

use Bitrix\Iblock\Elements\ElementSeotextsTable;
use Bitrix\Iblock\Elements\ElementTextpagesTable;
use Bitrix\Iblock\Model\Section;
use Bitrix\Main\ORM\Query\Join;
use Placestart\Core\Component\Boilerplate;
use Placestart\Core\Component\Parameters;

class ProductDescriptionComponent extends Boilerplate
{
    protected static $name = "Описание товара из раздела";

    protected function getData()
    {
        /**
         * @var \Bitrix\Iblock\SectionTable $e
         */
        $e = Section::compileEntityByIblock('catalog');

        $result = $e::getList([
            'select' => ['TEXT_ID' => 'TEXT_PAGE.ID'],
            'filter' => [
                'CODE' => $this->arParams['SECTION_CODE']
            ],
            'runtime' => [
                'TEXT_PAGE' => [
                    'data_type' => ElementTextpagesTable::getEntity(),
                    'reference' => [
                        '=this.UF_PRODUCT_DESCRIPTION_CODE' => 'ref.CODE'
                    ],
                    'join_type' => Join::TYPE_INNER,
                ]
            ],
            'limit' => 1
        ]);

        if ($section = $result->fetch()) {
            $this->arResult['TEXT_ID'] = $section['TEXT_ID'];
        }
    }

    public static function getComponentParameters(): Parameters
    {
        $params = new Parameters();
        $params->group('DATA', 'Параметры', 100, [
            'IS_PAGE_BLOCK' => $params->checkbox('Добавить отступы блока'),
            'SECTION_CODE' => $params->string('Символьный код раздела'),
        ]);
        return $params;
    }
}