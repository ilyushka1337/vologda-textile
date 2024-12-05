<?php

namespace Placestart\WildberriesApi\Model;

class RequestMoveNmsImtDisconn extends \ArrayObject
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
     * `nmID`, которые необходимо разъединить (max 30)
     *
     * @var list<int>
     */
    protected $nmIDs;
    /**
     * `nmID`, которые необходимо разъединить (max 30)
     *
     * @return list<int>
     */
    public function getNmIDs(): array
    {
        return $this->nmIDs;
    }
    /**
     * `nmID`, которые необходимо разъединить (max 30)
     *
     * @param list<int> $nmIDs
     *
     * @return self
     */
    public function setNmIDs(array $nmIDs): self
    {
        $this->initialized['nmIDs'] = true;
        $this->nmIDs = $nmIDs;
        return $this;
    }
}