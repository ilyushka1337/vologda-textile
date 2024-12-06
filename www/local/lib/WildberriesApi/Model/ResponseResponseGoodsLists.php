<?php

namespace Placestart\WildberriesApi\Model;

class ResponseResponseGoodsLists extends \ArrayObject
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
     * @var ResponseResponseGoodsListsData
     */
    protected $data;
    /**
     * 
     *
     * @return ResponseResponseGoodsListsData
     */
    public function getData(): ResponseResponseGoodsListsData
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ResponseResponseGoodsListsData $data
     *
     * @return self
     */
    public function setData(ResponseResponseGoodsListsData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}