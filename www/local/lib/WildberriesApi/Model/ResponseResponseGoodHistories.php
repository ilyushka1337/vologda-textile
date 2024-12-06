<?php

namespace Placestart\WildberriesApi\Model;

class ResponseResponseGoodHistories extends \ArrayObject
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
     * @var ResponseResponseGoodHistoriesData
     */
    protected $data;
    /**
     * 
     *
     * @return ResponseResponseGoodHistoriesData
     */
    public function getData(): ResponseResponseGoodHistoriesData
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ResponseResponseGoodHistoriesData $data
     *
     * @return self
     */
    public function setData(ResponseResponseGoodHistoriesData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}