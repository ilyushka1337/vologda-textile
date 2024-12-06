<?php

namespace Placestart\WildberriesApi\Model;

class ContentV2TagsGetResponse200Data extends \ArrayObject
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
     * Числовой ID тега
     *
     * @var int
     */
    protected $id;
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
     * Числовой ID тега
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * Числовой ID тега
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
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