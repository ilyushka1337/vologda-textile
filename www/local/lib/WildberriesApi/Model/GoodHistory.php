<?php

namespace Placestart\WildberriesApi\Model;

class GoodHistory extends \ArrayObject
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
     * ID размера. В методах контента это поле `chrtID`
     *
     * @var int
     */
    protected $sizeID;
    /**
     * Размер
     *
     * @var string
     */
    protected $techSizeName;
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
     * Статус товара: 
     * `2` — товар без ошибок, цена и/или скидка обновилась
     * `3` — есть ошибки, данные не обновились
     *
     * @var int
     */
    protected $status;
    /**
    * Текст ошибки
    
    <div class="description_important">
     Ошибка <code>The product is in quarantine</code> возникает, если новая цена со скидкой хотя бы в 3 раза меньше старой. Вы можете изменить цену или скидку с помощью API либо вывести товар из карантина <a href="https://seller.wildberries.ru/discount-and-prices/quarantine">в личном кабинете</a>
    </div>
    
    *
    * @var string
    */
    protected $errorText;
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
     * Размер
     *
     * @return string
     */
    public function getTechSizeName(): string
    {
        return $this->techSizeName;
    }
    /**
     * Размер
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
     * Статус товара: 
     * `2` — товар без ошибок, цена и/или скидка обновилась
     * `3` — есть ошибки, данные не обновились
     *
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }
    /**
     * Статус товара: 
     * `2` — товар без ошибок, цена и/или скидка обновилась
     * `3` — есть ошибки, данные не обновились
     *
     * @param int $status
     *
     * @return self
     */
    public function setStatus(int $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
    * Текст ошибки
    
    <div class="description_important">
     Ошибка <code>The product is in quarantine</code> возникает, если новая цена со скидкой хотя бы в 3 раза меньше старой. Вы можете изменить цену или скидку с помощью API либо вывести товар из карантина <a href="https://seller.wildberries.ru/discount-and-prices/quarantine">в личном кабинете</a>
    </div>
    
    *
    * @return string
    */
    public function getErrorText(): string
    {
        return $this->errorText;
    }
    /**
    * Текст ошибки
    
    <div class="description_important">
     Ошибка <code>The product is in quarantine</code> возникает, если новая цена со скидкой хотя бы в 3 раза меньше старой. Вы можете изменить цену или скидку с помощью API либо вывести товар из карантина <a href="https://seller.wildberries.ru/discount-and-prices/quarantine">в личном кабинете</a>
    </div>
    
    *
    * @param string $errorText
    *
    * @return self
    */
    public function setErrorText(string $errorText): self
    {
        $this->initialized['errorText'] = true;
        $this->errorText = $errorText;
        return $this;
    }
}