<?php
namespace Placestart\Components;

use Bitrix\Iblock\Elements\ElementSeotextsTable;
use Bitrix\Main\Loader;
use Placestart\Core\Component\Boilerplate;
use Placestart\Core\Component\Parameters;
use Placestart\Core\Utils;

class FabricsSectionComponent extends Boilerplate
{
    protected static $name = "Ткани";

    protected function getData()
    {
        $q = ElementSeotextsTable::getList([
            'select' => ['PREVIEW_TEXT', 'PREVIEW_PICTURE', 'CODE'],
            'filter' => ['CODE' => [$this->arParams['TEXT_1_CODE'], $this->arParams['TEXT_2_CODE']]]
        ]);

        while ($elem = $q->fetch()) {
            if ($elem['CODE'] == $this->arParams['TEXT_1_CODE']) {
                $this->arResult['TEXT_1'] = $elem['PREVIEW_TEXT'];
                $this->arResult['PICTURE_1'] = Utils::resizeImage($elem['PREVIEW_PICTURE'], 466, 526);
            }
            if ($elem['CODE'] == $this->arParams['TEXT_2_CODE']) {
                $this->arResult['TEXT_2'] = $elem['PREVIEW_TEXT'];
                $this->arResult['PICTURE_2'] = Utils::resizeImage($elem['PREVIEW_PICTURE'], 233, 269);
            }
        }
    }

    public static function getComponentParameters(): Parameters
    {
        $params = new Parameters();
        $params->group('DATA', '', 100, [
            'IS_PAGE_BLOCK' => $params->checkbox('Добавить отступы блока'),
            'TITLE' => $params->string('Заголовок'),
            'TEXT_1_CODE' => $params->string('Первый блок текста'),
            'TEXT_2_CODE' => $params->string('Второй блок текста')
        ]);
        return $params;
    }
}