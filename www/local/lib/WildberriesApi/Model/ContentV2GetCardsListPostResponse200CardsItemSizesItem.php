<?php

namespace Placestart\WildberriesApi\Model;

class ContentV2GetCardsListPostResponse200CardsItemSizesItem extends \ArrayObject
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
     *
     * @var int
     */
    protected $chrtID;
    /**
     * Размер товара (А, XXL, 57 и др.)
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
     * Баркод товара
     *
     * @var list<string>
     */
    protected $skus;
    /**
     * Числовой ID размера для данного артикула WB
     *
     * @return int
     */
    public function getChrtID(): int
    {
        return $this->chrtID;
    }
    /**
     * Числовой ID размера для данного артикула WB
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
     * Размер товара (А, XXL, 57 и др.)
     *
     * @return string
     */
    public function getTechSize(): string
    {
        return $this->techSize;
    }
    /**
     * Размер товара (А, XXL, 57 и др.)
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
     * Баркод товара
     *
     * @return list<string>
     */
    public function getSkus(): array
    {
        return $this->skus;
    }
    /**
     * Баркод товара
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