<?php
namespace Placestart\Components;

use Bitrix\Main\Loader;
use Placestart\Wishlist\Wishlist;
use Placestart\Core\Component\Boilerplate;
use Placestart\Core\Component\Parameters;

final class WishlistSectionComponent extends Boilerplate
{
    protected static $name = "Вишлист";

    public function __construct(\CBitrixComponent $component = null)
    {
        Loader::requireModule('placestart.wishlist');
        parent::__construct($component);
    }

    protected function getData()
    {

        $this->arResult['WISHLIST'] = (new Wishlist('WISHLIST'))->getWishlist();

        if (count($this->arResult['WISHLIST']) > 0)
            $GLOBALS[$this->arParams['FILTER_NAME']] = [
                'ID' => $this->arResult['WISHLIST']
            ];
    }
    public static function getComponentParameters(): Parameters
    {
        $params = new Parameters();
        $params->group('DATA', 'Параметры', 100, [
            "FILTER_NAME" => $params->string("Название переменной для глобального фильтра", [
                'DEFAULT' => 'wishlistFilter'
            ]),
            'IS_PAGE_BLOCK' => $params->checkbox('Добавить отступы блока')
        ]);

        return $params;
    }
}
