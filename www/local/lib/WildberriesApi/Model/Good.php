<?php

namespace Placestart\WildberriesApi\Model;

class Good extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Артикул WB
     *
     * @var int
     */
    protected $nmID;
    /**
     * Цена. Валюту можно получить с помощью метода [Получение списка товаров по артикулам](./#tag/Ceny-i-skidki/paths/~1api~1v2~1list~1goods~1filter/get), поле `currencyIsoCode4217`
     *
     * @var int
     */
    protected $price;
    /**
     * Скидка, %
     *
     * @var int
     */
    protected $discount;
    /**
     * Артикул WB
     *
     * @return int
     */
    public function getNmID(): int
    {
        return $this->nmID;
    }
    /**
     * Артикул WB
     *
     * @param int $nmID
     *
     * @return self
     */
    public function setNmID(int $nmID): self
    {
        $this->initialized['nmID'] = true;
        $this->nmID = $nmID;
        return $this;
    }
    /**
     * Цена. Валюту можно получить с помощью метода [Получение списка товаров по артикулам](./#tag/Ceny-i-skidki/paths/~1api~1v2~1list~1goods~1filter/get), поле `currencyIsoCode4217`
     *
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }
    /**
     * Цена. Валюту можно получить с помощью метода [Получение списка товаров по артикулам](./#tag/Ceny-i-skidki/paths/~1api~1v2~1list~1goods~1filter/get), поле `currencyIsoCode4217`
     *
     * @param int $price
     *
     * @return self
     */
    public function setPrice(int $price): self
    {
        $this->initialized['price'] = true;
        $this->price = $price;
        return $this;
    }
    /**
     * Скидка, %
     *
     * @return int
     */
    public function getDiscount(): int
    {
        return $this->discount;
    }
    /**
     * Скидка, %
     *
     * @param int $discount
     *
     * @return self
     */
    public function setDiscount(int $discount): self
    {
        $this->initialized['discount'] = true;
        $this->discount = $discount;
        return $this;
    }
}