<?php

namespace Placestart\WildberriesApi\Model;

class ContentV2CardsLimitsGetResponse200Data extends \ArrayObject
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
     * Количество бесплатных лимитов
     *
     * @var int
     */
    protected $freeLimits;
    /**
     * Количество оплаченных лимитов
     *
     * @var int
     */
    protected $paidLimits;
    /**
     * Количество бесплатных лимитов
     *
     * @return int
     */
    public function getFreeLimits(): int
    {
        return $this->freeLimits;
    }
    /**
     * Количество бесплатных лимитов
     *
     * @param int $freeLimits
     *
     * @return self
     */
    public function setFreeLimits(int $freeLimits): self
    {
        $this->initialized['freeLimits'] = true;
        $this->freeLimits = $freeLimits;
        return $this;
    }
    /**
     * Количество оплаченных лимитов
     *
     * @return int
     */
    public function getPaidLimits(): int
    {
        return $this->paidLimits;
    }
    /**
     * Количество оплаченных лимитов
     *
     * @param int $paidLimits
     *
     * @return self
     */
    public function setPaidLimits(int $paidLimits): self
    {
        $this->initialized['paidLimits'] = true;
        $this->paidLimits = $paidLimits;
        return $this;
    }
}