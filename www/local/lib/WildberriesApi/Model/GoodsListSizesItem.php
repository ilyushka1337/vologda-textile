<?php

namespace Placestart\WildberriesApi\Model;

class GoodsListSizesItem extends \ArrayObject
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
     * ID размера. В методах контента это поле `chrtID`
     *
     * @var int
     */
    protected $sizeID;
    /**
     * Цена
     *
     * @var int
     */
    protected $price;
    /**
     * Цена со скидкой
     *
     * @var float
     */
    protected $discountedPrice;
    /**
     * Цена со скидкой, включая скидку WB Клуба
     *
     * @var float
     */
    protected $clubDiscountedPrice;
    /**
     * Размер товара
     *
     * @var string
     */
    protected $techSizeName;
    /**
     * ID размера. В методах контента это поле `chrtID`
     *
     * @return int
     */
    public function getSizeID(): int
    {
        return $this->sizeID;
    }
    /**
     * ID размера. В методах контента это поле `chrtID`
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
     * Цена
     *
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }
    /**
     * Цена
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
     * Цена со скидкой
     *
     * @return float
     */
    public function getDiscountedPrice(): float
    {
        return $this->discountedPrice;
    }
    /**
     * Цена со скидкой
     *
     * @param float $discountedPrice
     *
     * @return self
     */
    public function setDiscountedPrice(float $discountedPrice): self
    {
        $this->initialized['discountedPrice'] = true;
        $this->discountedPrice = $discountedPrice;
        return $this;
    }
    /**
     * Цена со скидкой, включая скидку WB Клуба
     *
     * @return float
     */
    public function getClubDiscountedPrice(): float
    {
        return $this->clubDiscountedPrice;
    }
    /**
     * Цена со скидкой, включая скидку WB Клуба
     *
     * @param float $clubDiscountedPrice
     *
     * @return self
     */
    public function setClubDiscountedPrice(float $clubDiscountedPrice): self
    {
        $this->initialized['clubDiscountedPrice'] = true;
        $this->clubDiscountedPrice = $clubDiscountedPrice;
        return $this;
    }
    /**
     * Размер товара
     *
     * @return string
     */
    public function getTechSizeName(): string
    {
        return $this->techSizeName;
    }
    /**
     * Размер товара
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
}