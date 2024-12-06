<?php

namespace Placestart\WildberriesApi\Model;

class ResponseResponseQuarantineGoodsData extends \ArrayObject
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
     * Информация о товарах в карантине
     *
     * @var list<QuarantineGoods>
     */
    protected $quarantineGoods;
    /**
     * Информация о товарах в карантине
     *
     * @return list<QuarantineGoods>
     */
    public function getQuarantineGoods(): array
    {
        return $this->quarantineGoods;
    }
    /**
     * Информация о товарах в карантине
     *
     * @param list<QuarantineGoods> $quarantineGoods
     *
     * @return self
     */
    public function setQuarantineGoods(array $quarantineGoods): self
    {
        $this->initialized['quarantineGoods'] = true;
        $this->quarantineGoods = $quarantineGoods;
        return $this;
    }
}