<?php

namespace Placestart\WildberriesApi\Model;

class GoodsList extends \ArrayObject
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
     * Артикул продавца
     *
     * @var string
     */
    protected $vendorCode;
    /**
     * Размер
     *
     * @var list<GoodsListSizesItem>
     */
    protected $sizes;
    /**
     * Валюта, по стандарту ISO 4217
     *
     * @var string
     */
    protected $currencyIsoCode4217;
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
     * Размер
     *
     * @return list<GoodsListSizesItem>
     */
    public function getSizes(): array
    {
        return $this->sizes;
    }
    /**
     * Размер
     *
     * @param list<GoodsListSizesItem> $sizes
     *
     * @return self
     */
    public function setSizes(array $sizes): self
    {
        $this->initialized['sizes'] = true;
        $this->sizes = $sizes;
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