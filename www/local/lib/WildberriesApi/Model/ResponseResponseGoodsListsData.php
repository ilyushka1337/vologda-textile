<?php

namespace Placestart\WildberriesApi\Model;

class ResponseResponseGoodsListsData extends \ArrayObject
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
     * Информация о товарах
     *
     * @var list<GoodsList>
     */
    protected $listGoods;
    /**
     * Информация о товарах
     *
     * @return list<GoodsList>
     */
    public function getListGoods(): array
    {
        return $this->listGoods;
    }
    /**
     * Информация о товарах
     *
     * @param list<GoodsList> $listGoods
     *
     * @return self
     */
    public function setListGoods(array $listGoods): self
    {
        $this->initialized['listGoods'] = true;
        $this->listGoods = $listGoods;
        return $this;
    }
}