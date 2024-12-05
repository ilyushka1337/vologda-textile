<?php

namespace Placestart\WildberriesApi\Model;

class ContentV2CardsUpdatePostBodyItemDimensions extends \ArrayObject
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
     * Длина, см
     *
     * @var int
     */
    protected $length;
    /**
     * Ширина, см
     *
     * @var int
     */
    protected $width;
    /**
     * Высота, см
     *
     * @var int
     */
    protected $height;
    /**
     * Длина, см
     *
     * @return int
     */
    public function getLength(): int
    {
        return $this->length;
    }
    /**
     * Длина, см
     *
     * @param int $length
     *
     * @return self
     */
    public function setLength(int $length): self
    {
        $this->initialized['length'] = true;
        $this->length = $length;
        return $this;
    }
    /**
     * Ширина, см
     *
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }
    /**
     * Ширина, см
     *
     * @param int $width
     *
     * @return self
     */
    public function setWidth(int $width): self
    {
        $this->initialized['width'] = true;
        $this->width = $width;
        return $this;
    }
    /**
     * Высота, см
     *
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }
    /**
     * Высота, см
     *
     * @param int $height
     *
     * @return self
     */
    public function setHeight(int $height): self
    {
        $this->initialized['height'] = true;
        $this->height = $height;
        return $this;
    }
}