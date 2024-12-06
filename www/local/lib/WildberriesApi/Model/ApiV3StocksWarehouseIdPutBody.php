<?php

namespace Placestart\WildberriesApi\Model;

class ApiV3StocksWarehouseIdPutBody extends \ArrayObject
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
     * Массив баркодов товаров и их остатков
     *
     * @var list<ApiV3StocksWarehouseIdPutBodyStocksItem>
     */
    protected $stocks;
    /**
     * Массив баркодов товаров и их остатков
     *
     * @return list<ApiV3StocksWarehouseIdPutBodyStocksItem>
     */
    public function getStocks(): array
    {
        return $this->stocks;
    }
    /**
     * Массив баркодов товаров и их остатков
     *
     * @param list<ApiV3StocksWarehouseIdPutBodyStocksItem> $stocks
     *
     * @return self
     */
    public function setStocks(array $stocks): self
    {
        $this->initialized['stocks'] = true;
        $this->stocks = $stocks;
        return $this;
    }
}