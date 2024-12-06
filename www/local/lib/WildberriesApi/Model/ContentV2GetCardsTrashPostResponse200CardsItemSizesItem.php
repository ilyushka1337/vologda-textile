<?php

namespace Placestart\WildberriesApi\Model;

class ContentV2GetCardsTrashPostResponse200CardsItemSizesItem extends \ArrayObject
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
     * ID размера
     *
     * @var int
     */
    protected $chrtID;
    /**
     * Размер товара
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
     * Массив баркодов
     *
     * @var list<string>
     */
    protected $skus;
    /**
     * ID размера
     *
     * @return int
     */
    public function getChrtID(): int
    {
        return $this->chrtID;
    }
    /**
     * ID размера
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
     * Размер товара
     *
     * @return string
     */
    public function getTechSize(): string
    {
        return $this->techSize;
    }
    /**
     * Размер товара
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
     * Массив баркодов
     *
     * @return list<string>
     */
    public function getSkus(): array
    {
        return $this->skus;
    }
    /**
     * Массив баркодов
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