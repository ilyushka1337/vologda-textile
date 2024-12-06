<?php

namespace Placestart\WildberriesApi\Model;

class ContentV2GetCardsTrashPostResponse200Cursor extends \ArrayObject
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
     * @var string
     */
    protected $trashedAt;
    /**
     * 
     *
     * @var int
     */
    protected $nmID;
    /**
     * 
     *
     * @var int
     */
    protected $total;
    /**
     * 
     *
     * @return string
     */
    public function getTrashedAt(): string
    {
        return $this->trashedAt;
    }
    /**
     * 
     *
     * @param string $trashedAt
     *
     * @return self
     */
    public function setTrashedAt(string $trashedAt): self
    {
        $this->initialized['trashedAt'] = true;
        $this->trashedAt = $trashedAt;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getNmID(): int
    {
        return $this->nmID;
    }
    /**
     * 
     *
     * @param int $nmID
     *
     * @return self
     */
    public function setNmID(int $nmID): self
    {
        $this->initialized['nmID'] = true;
        $this->nmID = $nmID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }
    /**
     * 
     *
     * @param int $total
     *
     * @return self
     */
    public function setTotal(int $total): self
    {
        $this->initialized['total'] = true;
        $this->total = $total;
        return $this;
    }
}