<?php

namespace Placestart\Wishlist;

use Bitrix\Main\Context;
use Bitrix\Main\Web\Json;
use Bitrix\Main\Web\Cookie;

class Wishlist
{
    private $cookieCode;

    public function __construct(string $cookieCode)
    {
        $this->cookieCode = $cookieCode;
    }

    protected function addCookie(array $value)
    {
        $cookie = new Cookie($this->cookieCode, Json::encode($value));

        $response = Context::getCurrent()->getResponse();
        $response->addCookie($cookie);
    }

    public function getWishlist()
    {
        $wishlist = Context::getCurrent()->getRequest()->getCookie($this->cookieCode);

        if (isset($wishlist) && !empty($wishlist)) {
            try {
                $wishlist = Json::decode($wishlist);

                if (is_array($wishlist)) {
                    return $wishlist;
                }
            } catch (\Throwable $th) {
            }
        }

        return [];
    }

    public function removeAll(): void
    {
        $this->addCookie([]);
    }

    public function remove(string $id): array
    {
        $wishlist = $this->getWishlist();

        $key = array_search($id, $wishlist);
        if ($key !== false) {
            unset($wishlist[$key]);
        }

        $arResult = [
            'PRODUCT_ID' => $id,
            'IN_WISHLIST' => false,
            'WISHLIST_COUNTER' => count($wishlist),
        ];

        $this->addCookie($wishlist);

        return $arResult;
    }

    public function toggle(string $id): array
    {
        $wishlisted = false;

        $wishlist = $this->getWishlist();

        $key = array_search($id, $wishlist);

        if ($key !== false) {
            unset($wishlist[$key]);
            $wishlisted = false;
        } else {
            $wishlist[] = $id;
            $wishlisted = true;
        }

        $arResult = [
            'PRODUCT_ID' => $id,
            'IN_WISHLIST' => $wishlisted,
            'WISHLIST_COUNTER' => count($wishlist),
        ];

        $this->addCookie($wishlist);

        return $arResult;
    }
}
