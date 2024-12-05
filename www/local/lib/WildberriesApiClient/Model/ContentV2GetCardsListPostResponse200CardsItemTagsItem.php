<?php

namespace Placestart\WildberriesApi\Model;

class ContentV2GetCardsListPostResponse200CardsItemTagsItem extends \ArrayObject
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
     * ID тега
     *
     * @var int
     */
    protected $id;
    /**
     * Название тега
     *
     * @var string
     */
    protected $name;
    /**
     * Цвет тега. <dl> <dt>Доступные цвета:</dt> <dd><code>D1CFD7</code> - серый</dd> <dd><code>FEE0E0</code> - красный</dd> <dd><code>ECDAFF</code> - фиолетовый</dd> <dd><code>E4EAFF</code> - синий</dd> <dd><code>DEF1DD</code> - зеленый</dd> <dd><code>FFECC7</code> - желтый</dd> </dl>        
     *
     * @var string
     */
    protected $color;
    /**
     * ID тега
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * ID тега
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
     * Название тега
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Название тега
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
}