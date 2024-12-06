<?php

namespace Placestart\WildberriesApi\Model;

class ContentV2BarcodesPostBody extends \ArrayObject
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
     * Кол-во баркодов которые надо сгенерировать, максимальное доступное количество баркодов для генерации - `5 000`
     *
     * @var int
     */
    protected $count;
    /**
     * Кол-во баркодов которые надо сгенерировать, максимальное доступное количество баркодов для генерации - `5 000`
     *
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }
    /**
     * Кол-во баркодов которые надо сгенерировать, максимальное доступное количество баркодов для генерации - `5 000`
     *
     * @param int $count
     *
     * @return self
     */
    public function setCount(int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;
        return $this;
    }
}