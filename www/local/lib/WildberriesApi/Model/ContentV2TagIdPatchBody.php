<?php

namespace Placestart\WildberriesApi\Model;

class ContentV2TagIdPatchBody extends \ArrayObject
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
     * Цвет тега
     *
     * @var string
     */
    protected $color;
    /**
     * Имя тега
     *
     * @var string
     */
    protected $name;
    /**
     * Цвет тега
     *
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }
    /**
     * Цвет тега
     *
     * @param string $color
     *
     * @return self
     */
    public function setColor(string $color): self
    {
        $this->initialized['color'] = true;
        $this->color = $color;
        return $this;
    }
    /**
     * Имя тега
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Имя тега
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
}