<?php

namespace Placestart\WildberriesApi\Model;

class ContentV2ObjectCharcsSubjectIdGetResponse200DataItem extends \ArrayObject
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
    protected $charcID;
    /**
     * Название предмета
     *
     * @var string
     */
    protected $subjectName;
    /**
     * ID предмета
     *
     * @var int
     */
    protected $subjectID;
    /**
     * Название характеристики
     *
     * @var string
     */
    protected $name;
    /**
     * true - характеристику необходимо обязательно указать в карточке товара. false - характеристику не обязательно указывать
     *
     * @var bool
     */
    protected $required;
    /**
     * Единица измерения
     *
     * @var string
     */
    protected $unitName;
    /**
     * Максимальное кол-во значений, которое можно присвоить данной характеристике. Если 0, то нет ограничения.
     *
     * @var int
     */
    protected $maxCount;
    /**
     * Характеристика популярна у пользователей (true - да, false - нет)
     *
     * @var bool
     */
    protected $popular;
    /**
     * Тип характеристики (1 и 0 - строка или массив строк; 4 - число или массив чисел)
     *
     * @var int
     */
    protected $charcType;
    /**
     * ID характеристики
     *
     * @return int
     */
    public function getCharcID(): int
    {
        return $this->charcID;
    }
    /**
     * ID характеристики
     *
     * @param int $charcID
     *
     * @return self
     */
    public function setCharcID(int $charcID): self
    {
        $this->initialized['charcID'] = true;
        $this->charcID = $charcID;
        return $this;
    }
    /**
     * Название предмета
     *
     * @return string
     */
    public function getSubjectName(): string
    {
        return $this->subjectName;
    }
    /**
     * Название предмета
     *
     * @param string $subjectName
     *
     * @return self
     */
    public function setSubjectName(string $subjectName): self
    {
        $this->initialized['subjectName'] = true;
        $this->subjectName = $subjectName;
        return $this;
    }
    /**
     * ID предмета
     *
     * @return int
     */
    public function getSubjectID(): int
    {
        return $this->subjectID;
    }
    /**
     * ID предмета
     *
     * @param int $subjectID
     *
     * @return self
     */
    public function setSubjectID(int $subjectID): self
    {
        $this->initialized['subjectID'] = true;
        $this->subjectID = $subjectID;
        return $this;
    }
    /**
     * Название характеристики
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Название характеристики
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
     * true - характеристику необходимо обязательно указать в карточке товара. false - характеристику не обязательно указывать
     *
     * @return bool
     */
    public function getRequired(): bool
    {
        return $this->required;
    }
    /**
     * true - характеристику необходимо обязательно указать в карточке товара. false - характеристику не обязательно указывать
     *
     * @param bool $required
     *
     * @return self
     */
    public function setRequired(bool $required): self
    {
        $this->initialized['required'] = true;
        $this->required = $required;
        return $this;
    }
    /**
     * Единица измерения
     *
     * @return string
     */
    public function getUnitName(): string
    {
        return $this->unitName;
    }
    /**
     * Единица измерения
     *
     * @param string $unitName
     *
     * @return self
     */
    public function setUnitName(string $unitName): self
    {
        $this->initialized['unitName'] = true;
        $this->unitName = $unitName;
        return $this;
    }
    /**
     * Максимальное кол-во значений, которое можно присвоить данной характеристике. Если 0, то нет ограничения.
     *
     * @return int
     */
    public function getMaxCount(): int
    {
        return $this->maxCount;
    }
    /**
     * Максимальное кол-во значений, которое можно присвоить данной характеристике. Если 0, то нет ограничения.
     *
     * @param int $maxCount
     *
     * @return self
     */
    public function setMaxCount(int $maxCount): self
    {
        $this->initialized['maxCount'] = true;
        $this->maxCount = $maxCount;
        return $this;
    }
    /**
     * Характеристика популярна у пользователей (true - да, false - нет)
     *
     * @return bool
     */
    public function getPopular(): bool
    {
        return $this->popular;
    }
    /**
     * Характеристика популярна у пользователей (true - да, false - нет)
     *
     * @param bool $popular
     *
     * @return self
     */
    public function setPopular(bool $popular): self
    {
        $this->initialized['popular'] = true;
        $this->popular = $popular;
        return $this;
    }
    /**
     * Тип характеристики (1 и 0 - строка или массив строк; 4 - число или массив чисел)
     *
     * @return int
     */
    public function getCharcType(): int
    {
        return $this->charcType;
    }
    /**
     * Тип характеристики (1 и 0 - строка или массив строк; 4 - число или массив чисел)
     *
     * @param int $charcType
     *
     * @return self
     */
    public function setCharcType(int $charcType): self
    {
        $this->initialized['charcType'] = true;
        $this->charcType = $charcType;
        return $this;
    }
}