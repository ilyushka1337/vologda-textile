<?php

namespace Placestart\WildberriesApi\Model;

class ContentV2GetCardsTrashPostResponse200CardsItemPhotosItem extends \ArrayObject
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
     * URL фото `900х1200`
     *
     * @var string
     */
    protected $big;
    /**
     * URL фото `248х328`
     *
     * @var string
     */
    protected $c246x328;
    /**
     * URL фото `516х688`
     *
     * @var string
     */
    protected $c516x688;
    /**
     * URL фото `600х600`
     *
     * @var string
     */
    protected $square;
    /**
     * URL фото `75х100`
     *
     * @var string
     */
    protected $tm;
    /**
     * URL фото `900х1200`
     *
     * @return string
     */
    public function getBig(): string
    {
        return $this->big;
    }
    /**
     * URL фото `900х1200`
     *
     * @param string $big
     *
     * @return self
     */
    public function setBig(string $big): self
    {
        $this->initialized['big'] = true;
        $this->big = $big;
        return $this;
    }
    /**
     * URL фото `248х328`
     *
     * @return string
     */
    public function getC246x328(): string
    {
        return $this->c246x328;
    }
    /**
     * URL фото `248х328`
     *
     * @param string $c246x328
     *
     * @return self
     */
    public function setC246x328(string $c246x328): self
    {
        $this->initialized['c246x328'] = true;
        $this->c246x328 = $c246x328;
        return $this;
    }
    /**
     * URL фото `516х688`
     *
     * @return string
     */
    public function getC516x688(): string
    {
        return $this->c516x688;
    }
    /**
     * URL фото `516х688`
     *
     * @param string $c516x688
     *
     * @return self
     */
    public function setC516x688(string $c516x688): self
    {
        $this->initialized['c516x688'] = true;
        $this->c516x688 = $c516x688;
        return $this;
    }
    /**
     * URL фото `600х600`
     *
     * @return string
     */
    public function getSquare(): string
    {
        return $this->square;
    }
    /**
     * URL фото `600х600`
     *
     * @param string $square
     *
     * @return self
     */
    public function setSquare(string $square): self
    {
        $this->initialized['square'] = true;
        $this->square = $square;
        return $this;
    }
    /**
     * URL фото `75х100`
     *
     * @return string
     */
    public function getTm(): string
    {
        return $this->tm;
    }
    /**
     * URL фото `75х100`
     *
     * @param string $tm
     *
     * @return self
     */
    public function setTm(string $tm): self
    {
        $this->initialized['tm'] = true;
        $this->tm = $tm;
        return $this;
    }
}