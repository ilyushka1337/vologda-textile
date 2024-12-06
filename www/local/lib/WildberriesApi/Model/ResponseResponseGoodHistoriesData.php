<?php

namespace Placestart\WildberriesApi\Model;

class ResponseResponseGoodHistoriesData extends \ArrayObject
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
     * ID загрузки
     *
     * @var int
     */
    protected $uploadID;
    /**
     * Информация о товарах в загрузке
     *
     * @var list<GoodHistory>
     */
    protected $historyGoods;
    /**
     * ID загрузки
     *
     * @return int
     */
    public function getUploadID(): int
    {
        return $this->uploadID;
    }
    /**
     * ID загрузки
     *
     * @param int $uploadID
     *
     * @return self
     */
    public function setUploadID(int $uploadID): self
    {
        $this->initialized['uploadID'] = true;
        $this->uploadID = $uploadID;
        return $this;
    }
    /**
     * Информация о товарах в загрузке
     *
     * @return list<GoodHistory>
     */
    public function getHistoryGoods(): array
    {
        return $this->historyGoods;
    }
    /**
     * Информация о товарах в загрузке
     *
     * @param list<GoodHistory> $historyGoods
     *
     * @return self
     */
    public function setHistoryGoods(array $historyGoods): self
    {
        $this->initialized['historyGoods'] = true;
        $this->historyGoods = $historyGoods;
        return $this;
    }
}