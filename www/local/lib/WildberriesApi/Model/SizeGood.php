<?php

namespace Placestart\WildberriesApi\Model;

class SizeGood extends \ArrayObject
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
     * Артикул продавца
     *
     * @var string
     */
    protected $vendorCode;
    /**
     * Цена
     *
     * @var int
     */
    protected $price;
    /**
     * Валюта, по стандарту ISO 4217
     *
     * @var string
     */
    protected $currencyIsoCode4217;
    /**
     * Цена со скидкой
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
     * Скидка, %
     *
     * @var int
     */
    protected $discount;
    /**
     * Скидка WB Клуба, %
     *
     * @var int
     */
    protected $clubDiscount;
    /**
     * Размер товара
     *
     * @var string
     */
    protected $techSizeName;
    /**
     * Можно ли устанавливать цены отдельно для разных размеров: `true` — можно, `false` — нельзя. Эта возможность зависит от категории товара
     *
     * @var bool
     */
    protected $editableSizePrice;
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
     * Артикул продавца
     *
     * @return string
     */
    public function getVendorCode(): string
    {
        return $this->vendorCode;
    }
    /**
     * Артикул продавца
     *
     * @param string $vendorCode
     *
     * @return self
     */
    public function setVendorCode(string $vendorCode): self
    {
        $this->initialized['vendorCode'] = true;
        $this->vendorCode = $vendorCode;
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
     * Валюта, по стандарту ISO 4217
     *
     * @return string
     */
    public function getCurrencyIsoCode4217(): string
    {
        return $this->currencyIsoCode4217;
    }
    /**
     * Валюта, по стандарту ISO 4217
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
     * Цена со скидкой
     *
     * @return float
     */
    public function getDiscountedPrice(): float
    {
        return $this->discountedPrice;
    }
    /**
     * Цена со скидкой
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
    /**
     * Скидка WB Клуба, %
     *
     * @return int
     */
    public function getClubDiscount(): int
    {
        return $this->clubDiscount;
    }
    /**
     * Скидка WB Клуба, %
     *
     * @param int $clubDiscount
     *
     * @return self
     */
    public function setClubDiscount(int $clubDiscount): self
    {
        $this->initialized['clubDiscount'] = true;
        $this->clubDiscount = $clubDiscount;
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
    /**
     * Можно ли устанавливать цены отдельно для разных размеров: `true` — можно, `false` — нельзя. Эта возможность зависит от категории товара
     *
     * @return bool
     */
    public function getEditableSizePrice(): bool
    {
        return $this->editableSizePrice;
    }
    /**
     * Можно ли устанавливать цены отдельно для разных размеров: `true` — можно, `false` — нельзя. Эта возможность зависит от категории товара
     *
     * @param bool $editableSizePrice
     *
     * @return self
     */
    public function setEditableSizePrice(bool $editableSizePrice): self
    {
        $this->initialized['editableSizePrice'] = true;
        $this->editableSizePrice = $editableSizePrice;
        return $this;
    }
}