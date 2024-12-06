<?php

namespace Placestart\WildberriesApi\Model;

class ContentV2CardsUploadPostBodyItemVariantsItemCharacteristicsItem extends \ArrayObject
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
     * ID характеристики
     *
     * @var int
     */
    protected $id;
    /**
     * Значение характеристики. Тип значения зависит от типа характеристики
     *
     * @var mixed
     */
    protected $value;
    /**
     * ID характеристики
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * ID характеристики
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
     * Значение характеристики. Тип значения зависит от типа характеристики
     *
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Значение характеристики. Тип значения зависит от типа характеристики
     *
     * @param mixed $value
     *
     * @return self
     */
    public function setValue($value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}