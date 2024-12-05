<?php

namespace Placestart\WildberriesApi\Model;

class ResponseResponseSizeListsData extends \ArrayObject
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
     * Размеры товара
     *
     * @var list<SizeGood>
     */
    protected $listGoods;
    /**
     * Размеры товара
     *
     * @return list<SizeGood>
     */
    public function getListGoods(): array
    {
        return $this->listGoods;
    }
    /**
     * Размеры товара
     *
     * @param list<SizeGood> $listGoods
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