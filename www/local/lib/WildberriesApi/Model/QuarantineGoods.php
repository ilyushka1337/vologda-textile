<?php

namespace Placestart\WildberriesApi\Model;

class QuarantineGoods extends \ArrayObject
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
     * Не используется
     *
     * @var int
     */
    protected $sizeID;
    /**
     * Не используется
     *
     * @var string
     */
    protected $techSizeName;
    /**
     * Валюта по стандарту ISO 4217
     *
     * @var string
     */
    protected $currencyIsoCode4217;
    /**
     * Новая цена продавца до скидки
     *
     * @var float
     */
    protected $newPrice;
    /**
     * Текущая цена продавца до скидки
     *
     * @var float
     */
    protected $oldPrice;
    /**
     * Новая скидка продавца, %
     *
     * @var int
     */
    protected $newDiscount;
    /**
     * Текущая скидка продавца, %
     *
     * @var int
     */
    protected $oldDiscount;
    /**
     * Разница: `newPrice` * (1 - `newDiscount` / 100) - `oldPrice` * (1 - `oldDiscount` / 100)
     *
     * @var float
     */
    protected $priceDiff;
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
     * Не используется
     *
     * @return int
     */
    public function getSizeID(): int
    {
        return $this->sizeID;
    }
    /**
     * Не используется
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
     * Не используется
     *
     * @return string
     */
    public function getTechSizeName(): string
    {
        return $this->techSizeName;
    }
    /**
     * Не используется
     *
     * @param string $techSizeName
     *
     * @return self
     */
    public function setTechSizeName(string $techSizeName): self
    {
        $this->initialized['techSizeName'] = true;
        $this->techSizeName = $techSizeName;
        return $this;
    }
    /**
     * Валюта по стандарту ISO 4217
     *
     * @return string
     */
    public function getCurrencyIsoCode4217(): string
    {
        return $this->currencyIsoCode4217;
    }
    /**
     * Валюта по стандарту ISO 4217
     *
     * @param string $currencyIsoCode4217
     *
     * @return self
     */
    public function setCurrencyIsoCode4217(string $currencyIsoCode4217): self
    {
        $this->initialized['currencyIsoCode4217'] = true;
        $this->currencyIsoCode4217 = $currencyIsoCode4217;
        return $this;
    }
    /**
     * Новая цена продавца до скидки
     *
     * @return float
     */
    public function getNewPrice(): float
    {
        return $this->newPrice;
    }
    /**
     * Новая цена продавца до скидки
     *
     * @param float $newPrice
     *
     * @return self
     */
    public function setNewPrice(float $newPrice): self
    {
        $this->initialized['newPrice'] = true;
        $this->newPrice = $newPrice;
        return $this;
    }
    /**
     * Текущая цена продавца до скидки
     *
     * @return float
     */
    public function getOldPrice(): float
    {
        return $this->oldPrice;
    }
    /**
     * Текущая цена продавца до скидки
     *
     * @param float $oldPrice
     *
     * @return self
     */
    public function setOldPrice(float $oldPrice): self
    {
        $this->initialized['oldPrice'] = true;
        $this->oldPrice = $oldPrice;
        return $this;
    }
    /**
     * Новая скидка продавца, %
     *
     * @return int
     */
    public function getNewDiscount(): int
    {
        return $this->newDiscount;
    }
    /**
     * Новая скидка продавца, %
     *
     * @param int $newDiscount
     *
     * @return self
     */
    public function setNewDiscount(int $newDiscount): self
    {
        $this->initialized['newDiscount'] = true;
        $this->newDiscount = $newDiscount;
        return $this;
    }
    /**
     * Текущая скидка продавца, %
     *
     * @return int
     */
    public function getOldDiscount(): int
    {
        return $this->oldDiscount;
    }
    /**
     * Текущая скидка продавца, %
     *
     * @param int $oldDiscount
     *
     * @return self
     */
    public function setOldDiscount(int $oldDiscount): self
    {
        $this->initialized['oldDiscount'] = true;
        $this->oldDiscount = $oldDiscount;
        return $this;
    }
    /**
     * Разница: `newPrice` * (1 - `newDiscount` / 100) - `oldPrice` * (1 - `oldDiscount` / 100)
     *
     * @return float
     */
    public function getPriceDiff(): float
    {
        return $this->priceDiff;
    }
    /**
     * Разница: `newPrice` * (1 - `newDiscount` / 100) - `oldPrice` * (1 - `oldDiscount` / 100)
     *
     * @param float $priceDiff
     *
     * @return self
     */
    public function setPriceDiff(float $priceDiff): self
    {
        $this->initialized['priceDiff'] = true;
        $this->priceDiff = $priceDiff;
        return $this;
    }
}