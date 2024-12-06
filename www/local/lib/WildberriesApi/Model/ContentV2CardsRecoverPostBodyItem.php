<?php

namespace Placestart\WildberriesApi\Model;

class ContentV2CardsRecoverPostBodyItem extends \ArrayObject
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
     * Артикул WB (max. 1000)
     *
     * @var list<mixed>
     */
    protected $nmIDs;
    /**
     * Артикул WB (max. 1000)
     *
     * @return list<mixed>
     */
    public function getNmIDs(): array
    {
        return $this->nmIDs;
    }
    /**
     * Артикул WB (max. 1000)
     *
     * @param list<mixed> $nmIDs
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