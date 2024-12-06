<?php

namespace Placestart\WildberriesApi\Model;

class ContentV2ObjectAllGetResponse200DataItem extends \ArrayObject
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
     * ID предмета
     *
     * @var int
     */
    protected $subjectID;
    /**
     * ID родительской категории
     *
     * @var int
     */
    protected $parentID;
    /**
     * Название предмета
     *
     * @var string
     */
    protected $subjectName;
    /**
     * Название родительской категории
     *
     * @var string
     */
    protected $parentName;
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
     * ID родительской категории
     *
     * @return int
     */
    public function getParentID(): int
    {
        return $this->parentID;
    }
    /**
     * ID родительской категории
     *
     * @param int $parentID
     *
     * @return self
     */
    public function setParentID(int $parentID): self
    {
        $this->initialized['parentID'] = true;
        $this->parentID = $parentID;
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
     * Название родительской категории
     *
     * @return string
     */
    public function getParentName(): string
    {
        return $this->parentName;
    }
    /**
     * Название родительской категории
     *
     * @param string $parentName
     *
     * @return self
     */
    public function setParentName(string $parentName): self
    {
        $this->initialized['parentName'] = true;
        $this->parentName = $parentName;
        return $this;
    }
}