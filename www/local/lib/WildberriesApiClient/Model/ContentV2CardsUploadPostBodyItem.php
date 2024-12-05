<?php

namespace Placestart\WildberriesApi\Model;

class ContentV2CardsUploadPostBodyItem extends \ArrayObject
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
     * Массив вариантов товара. В каждой карточке товара может быть не более 30 номенклатур
     *
     * @var list<ContentV2CardsUploadPostBodyItemVariantsItem>
     */
    protected $variants;
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
     * Массив вариантов товара. В каждой карточке товара может быть не более 30 номенклатур
     *
     * @return list<ContentV2CardsUploadPostBodyItemVariantsItem>
     */
    public function getVariants(): array
    {
        return $this->variants;
    }
    /**
     * Массив вариантов товара. В каждой карточке товара может быть не более 30 номенклатур
     *
     * @param list<ContentV2CardsUploadPostBodyItemVariantsItem> $variants
     *
     * @return self
     */
    public function setVariants(array $variants): self
    {
        $this->initialized['variants'] = true;
        $this->variants = $variants;
        return $this;
    }
}