<?php

namespace Placestart\WildberriesApi\Model;

class ApiV3StocksWarehouseIdPostResponse200 extends \ArrayObject
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
     * 
     *
     * @var list<ApiV3StocksWarehouseIdPostResponse200StocksItem>
     */
    protected $stocks;
    /**
     * 
     *
     * @return list<ApiV3StocksWarehouseIdPostResponse200StocksItem>
     */
    public function getStocks(): array
    {
        return $this->stocks;
    }
    /**
     * 
     *
     * @param list<ApiV3StocksWarehouseIdPostResponse200StocksItem> $stocks
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