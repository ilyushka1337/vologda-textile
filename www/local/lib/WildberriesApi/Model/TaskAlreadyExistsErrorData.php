<?php

namespace Placestart\WildberriesApi\Model;

class TaskAlreadyExistsErrorData extends \ArrayObject
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
     * ID загрузки
     *
     * @var int
     */
    protected $id;
    /**
     * Флаг дублирования загрузки: `true` — такая загрузка уже есть
     *
     * @var bool
     */
    protected $alreadyExists;
    /**
     * ID загрузки
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * ID загрузки
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
     * Флаг дублирования загрузки: `true` — такая загрузка уже есть
     *
     * @return bool
     */
    public function getAlreadyExists(): bool
    {
        return $this->alreadyExists;
    }
    /**
     * Флаг дублирования загрузки: `true` — такая загрузка уже есть
     *
     * @param bool $alreadyExists
     *
     * @return self
     */
    public function setAlreadyExists(bool $alreadyExists): self
    {
        $this->initialized['alreadyExists'] = true;
        $this->alreadyExists = $alreadyExists;
        return $this;
    }
}