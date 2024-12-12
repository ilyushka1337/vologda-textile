<?php

namespace Placestart\Wishlist\Controllers;

use Bitrix\Main\Engine\Controller;
use Bitrix\Main\Engine\ActionFilter;
use Bitrix\Main\Loader;
use Placestart\Core\HtmlResponse;
use Placestart\Wishlist\Wishlist;
use Bitrix\Main\HttpResponse;

Loader::includeModule("placestart.core");

class WishlistApi extends Controller
{
    public function configureActions()
    {
        return [
            'toggle' => [
                'prefilters' => [
                    new ActionFilter\Csrf(),
                ],
                'postfilters' => []
            ],
        ];
    }

    // placestart:wishlist.htmlApi.WishlistApi.removeAll
    public function removeAllAction(): HttpResponse
    {
        $instance = new Wishlist('WISHLIST');
        $instance->removeAll();

        $body = tpl("ui/alert", [
            'position' => 'bottom-right',
            'variant' => 'success',
            'title' => 'Благодарим!',
            'text' => "Все товары удалены из избранного",
            'isOpen' => true,
        ]) .
            tpl("components/total-wishlist-count", [
                "count" => 0
            ]);

        $response = new HtmlResponse($body);
        $response->addHeader("HX-Trigger", "show-success-alert");
        return $response;
    }

    // placestart:wishlist.htmlApi.WishlistApi.remove
    public function removeAction(string $id): HttpResponse
    {
        $instance = new Wishlist('WISHLIST');
        $result = $instance->remove($id);

        $body = tpl("ui/alert", [
            'position' => 'bottom-right',
            'variant' => 'success',
            'title' => 'Благодарим!',
            'text' => "Товар удален из избранного",
            'isOpen' => true,
        ]) .
            tpl("components/total-wishlist-count", [
                "count" => $result['WISHLIST_COUNTER']
            ]);

        $response = new HtmlResponse($body);
        $response->addHeader("HX-Trigger", "show-success-alert");
        return $response;
    }

    // placestart:wishlist.htmlApi.WishlistApi.toggle
    public function toggleAction(string $id): HttpResponse
    {
        $instance = new Wishlist('WISHLIST');
        $result = $instance->toggle($id);

        $body = tpl("ui/alert", [
            'position' => 'bottom-right',
            'variant' => 'success',
            'title' => 'Благодарим!',
            'text' => $result["IN_WISHLIST"] ? "Товар добавлен в избранное" : "Товар удален из избранного",
            'isOpen' => true,
        ]) .
            tpl("components/total-wishlist-count", [
                "count" => $result['WISHLIST_COUNTER']
            ]);

        $response = new HtmlResponse($body);
        $response->addHeader("HX-Trigger", "show-success-alert");
        return $response;
    }
}
