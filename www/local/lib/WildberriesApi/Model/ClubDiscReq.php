<?php

namespace Placestart\WildberriesApi\Model;

class ClubDiscReq extends \ArrayObject
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
     * Артикул WB
     *
     * @var int
     */
    protected $nmID;
    /**
     * Скидка WB Клуба, %
     *
     * @var int
     */
    protected $clubDiscount;
    /**
     * Артикул WB
     *
     * @return int
     */
    public function getNmID(): int
    {
        return $this->nmID;
    }
    /**
     * Артикул WB
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
     * Скидка WB Клуба, %
     *
     * @return int
     */
    public function getClubDiscount(): int
    {
        return $this->clubDiscount;
    }
    /**
     * Скидка WB Клуба, %
     *
     * @param int $clubDiscount
     *
     * @return self
     */
    public function setClubDiscount(int $clubDiscount): self
    {
        $this->initialized['clubDiscount'] = true;
        $this->clubDiscount = $clubDiscount;
        return $this;
    }
}