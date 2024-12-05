<?php

namespace Placestart\WildberriesApi\Model;

class ContentV2TagPostBody extends \ArrayObject
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
     * Цвет тега. <dl> <dt>Доступные цвета:</dt> <dd><code>D1CFD7</code> - серый</dd> <dd><code>FEE0E0</code> - красный</dd> <dd><code>ECDAFF</code> - фиолетовый</dd> <dd><code>E4EAFF</code> - синий</dd> <dd><code>DEF1DD</code> - зеленый</dd> <dd><code>FFECC7</code> - желтый</dd> </dl>
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
     * Цвет тега. <dl> <dt>Доступные цвета:</dt> <dd><code>D1CFD7</code> - серый</dd> <dd><code>FEE0E0</code> - красный</dd> <dd><code>ECDAFF</code> - фиолетовый</dd> <dd><code>E4EAFF</code> - синий</dd> <dd><code>DEF1DD</code> - зеленый</dd> <dd><code>FFECC7</code> - желтый</dd> </dl>
     *
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }
    /**
     * Цвет тега. <dl> <dt>Доступные цвета:</dt> <dd><code>D1CFD7</code> - серый</dd> <dd><code>FEE0E0</code> - красный</dd> <dd><code>ECDAFF</code> - фиолетовый</dd> <dd><code>E4EAFF</code> - синий</dd> <dd><code>DEF1DD</code> - зеленый</dd> <dd><code>FFECC7</code> - желтый</dd> </dl>
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