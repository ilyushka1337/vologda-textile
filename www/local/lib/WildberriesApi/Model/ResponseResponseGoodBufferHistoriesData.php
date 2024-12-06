<?php

namespace Placestart\WildberriesApi\Model;

class ResponseResponseGoodBufferHistoriesData extends \ArrayObject
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
     * @var list<GoodBufferHistory>
     */
    protected $bufferGoods;
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
     * @return list<GoodBufferHistory>
     */
    public function getBufferGoods(): array
    {
        return $this->bufferGoods;
    }
    /**
     * Информация о товарах в загрузке
     *
     * @param list<GoodBufferHistory> $bufferGoods
     *
     * @return self
     */
    public function setBufferGoods(array $bufferGoods): self
    {
        $this->initialized['bufferGoods'] = true;
        $this->bufferGoods = $bufferGoods;
        return $this;
    }
}