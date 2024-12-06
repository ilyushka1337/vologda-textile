<?php

namespace Placestart\WildberriesApi\Model;

class RequestMoveNmsImtConn extends \ArrayObject
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
     * Существующий у продавца `imtID`, под которым необходимо объединить номенклатуры
     *
     * @var int
     */
    protected $targetIMT;
    /**
     * `nmID`, которые необходимо объединить (максимум 30)
     *
     * @var list<int>
     */
    protected $nmIDs;
    /**
     * Существующий у продавца `imtID`, под которым необходимо объединить номенклатуры
     *
     * @return int
     */
    public function getTargetIMT(): int
    {
        return $this->targetIMT;
    }
    /**
     * Существующий у продавца `imtID`, под которым необходимо объединить номенклатуры
     *
     * @param int $targetIMT
     *
     * @return self
     */
    public function setTargetIMT(int $targetIMT): self
    {
        $this->initialized['targetIMT'] = true;
        $this->targetIMT = $targetIMT;
        return $this;
    }
    /**
     * `nmID`, которые необходимо объединить (максимум 30)
     *
     * @return list<int>
     */
    public function getNmIDs(): array
    {
        return $this->nmIDs;
    }
    /**
     * `nmID`, которые необходимо объединить (максимум 30)
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