<?php

namespace Placestart\WildberriesApi\Model;

class ContentV2CardsUpdatePostBodyItemSizesItem extends \ArrayObject
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
    * Числовой ID размера для данного артикула WB
    Обязателен к заполнению для существующих размеров.
    Для добавляемых размеров не указывается.
    
    *
    * @var int
    */
    protected $chrtID;
    /**
     * Размер товара (XL, S, 45 и др.)
     *
     * @var string
     */
    protected $techSize;
    /**
     * Российский размер товара
     *
     * @var string
     */
    protected $wbSize;
    /**
     * Баркод
     *
     * @var list<string>
     */
    protected $skus;
    /**
    * Числовой ID размера для данного артикула WB
    Обязателен к заполнению для существующих размеров.
    Для добавляемых размеров не указывается.
    
    *
    * @return int
    */
    public function getChrtID(): int
    {
        return $this->chrtID;
    }
    /**
    * Числовой ID размера для данного артикула WB
    Обязателен к заполнению для существующих размеров.
    Для добавляемых размеров не указывается.
    
    *
    * @param int $chrtID
    *
    * @return self
    */
    public function setChrtID(int $chrtID): self
    {
        $this->initialized['chrtID'] = true;
        $this->chrtID = $chrtID;
        return $this;
    }
    /**
     * Размер товара (XL, S, 45 и др.)
     *
     * @return string
     */
    public function getTechSize(): string
    {
        return $this->techSize;
    }
    /**
     * Размер товара (XL, S, 45 и др.)
     *
     * @param string $techSize
     *
     * @return self
     */
    public function setTechSize(string $techSize): self
    {
        $this->initialized['techSize'] = true;
        $this->techSize = $techSize;
        return $this;
    }
    /**
     * Российский размер товара
     *
     * @return string
     */
    public function getWbSize(): string
    {
        return $this->wbSize;
    }
    /**
     * Российский размер товара
     *
     * @param string $wbSize
     *
     * @return self
     */
    public function setWbSize(string $wbSize): self
    {
        $this->initialized['wbSize'] = true;
        $this->wbSize = $wbSize;
        return $this;
    }
    /**
     * Баркод
     *
     * @return list<string>
     */
    public function getSkus(): array
    {
        return $this->skus;
    }
    /**
     * Баркод
     *
     * @param list<string> $skus
     *
     * @return self
     */
    public function setSkus(array $skus): self
    {
        $this->initialized['skus'] = true;
        $this->skus = $skus;
        return $this;
    }
}