<?php

namespace Placestart\WildberriesApi\Model;

class ContentV2GetCardsListPostResponse200Cursor extends \ArrayObject
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
     * Дата с которой надо запрашивать следующий список карточек товара
     *
     * @var string
     */
    protected $updatedAt;
    /**
     * Номер Артикула WB с которой надо запрашивать следующий список карточек товара
     *
     * @var int
     */
    protected $nmID;
    /**
     * Кол-во возвращенных карточек товара
     *
     * @var int
     */
    protected $total;
    /**
     * Дата с которой надо запрашивать следующий список карточек товара
     *
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }
    /**
     * Дата с которой надо запрашивать следующий список карточек товара
     *
     * @param string $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(string $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * Номер Артикула WB с которой надо запрашивать следующий список карточек товара
     *
     * @return int
     */
    public function getNmID(): int
    {
        return $this->nmID;
    }
    /**
     * Номер Артикула WB с которой надо запрашивать следующий список карточек товара
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
     * Кол-во возвращенных карточек товара
     *
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }
    /**
     * Кол-во возвращенных карточек товара
     *
     * @param int $total
     *
     * @return self
     */
    public function setTotal(int $total): self
    {
        $this->initialized['total'] = true;
        $this->total = $total;
        return $this;
    }
}