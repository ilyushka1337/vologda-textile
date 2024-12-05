<?php

namespace Placestart\WildberriesApi\Model;

class ApiV3StocksWarehouseIdPostBody extends \ArrayObject
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
     * Массив баркодов
     *
     * @var list<string>
     */
    protected $skus;
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