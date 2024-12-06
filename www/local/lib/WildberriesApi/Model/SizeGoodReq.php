<?php

namespace Placestart\WildberriesApi\Model;

class SizeGoodReq extends \ArrayObject
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
     * ID размера. Можно получить с помощью метода [Получение списка товаров по артикулам](./#tag/Ceny-i-skidki/paths/~1api~1v2~1list~1goods~1filter/get), поле `sizeID`. В методах контента это поле `chrtID`
     *
     * @var int
     */
    protected $sizeID;
    /**
     * Цена. Валюту можно получить с помощью метода [Получение списка товаров по артикулам](./#tag/Ceny-i-skidki/paths/~1api~1v2~1list~1goods~1filter/get), поле `currencyIsoCode4217`
     *
     * @var int
     */
    protected $price;
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
     * ID размера. Можно получить с помощью метода [Получение списка товаров по артикулам](./#tag/Ceny-i-skidki/paths/~1api~1v2~1list~1goods~1filter/get), поле `sizeID`. В методах контента это поле `chrtID`
     *
     * @return int
     */
    public function getSizeID(): int
    {
        return $this->sizeID;
    }
    /**
     * ID размера. Можно получить с помощью метода [Получение списка товаров по артикулам](./#tag/Ceny-i-skidki/paths/~1api~1v2~1list~1goods~1filter/get), поле `sizeID`. В методах контента это поле `chrtID`
     *
     * @param int $sizeID
     *
     * @return self
     */
    public function setSizeID(int $sizeID): self
    {
        $this->initialized['sizeID'] = true;
        $this->sizeID = $sizeID;
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
}