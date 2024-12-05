<?php

namespace Placestart\WildberriesApi\Model;

class ContentV2CardsUploadAddPostBodyCardsToAddItemSizesItem extends \ArrayObject
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
     * Размер товара (XL, 42 и др.)
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
     * Цена товара
     *
     * @var int
     */
    protected $price;
    /**
     * Баркод
     *
     * @var list<string>
     */
    protected $skus;
    /**
     * Размер товара (XL, 42 и др.)
     *
     * @return string
     */
    public function getTechSize(): string
    {
        return $this->techSize;
    }
    /**
     * Размер товара (XL, 42 и др.)
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
     * Цена товара
     *
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }
    /**
     * Цена товара
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