<?php

namespace Placestart\WildberriesApi\Model;

class ContentV2TagNomenclatureLinkPostBody extends \ArrayObject
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
     * Артикул WB
     *
     * @var int
     */
    protected $nmID;
    /**
     * Массив числовых ID тегов.<br>   Что бы снять теги с карточки товара, необходимо передать пустой массив.<br> Чтобы добавить теги к уже имеющимся в карточке товара, необходимо в запросе передать новые теги и теги, которые уже есть в карточке товара.
     *
     * @var list<int>
     */
    protected $tagsIDs;
    /**
     * Артикул WB
     *
     * @return int
     */
    public function getNmID(): int
    {
        return $this->nmID;
    }
    /**
     * Артикул WB
     *
     * @param int $nmID
     *
     * @return self
     */
    public function setNmID(int $nmID): self
    {
        $this->initialized['nmID'] = true;
        $this->nmID = $nmID;
        return $this;
    }
    /**
     * Массив числовых ID тегов.<br>   Что бы снять теги с карточки товара, необходимо передать пустой массив.<br> Чтобы добавить теги к уже имеющимся в карточке товара, необходимо в запросе передать новые теги и теги, которые уже есть в карточке товара.
     *
     * @return list<int>
     */
    public function getTagsIDs(): array
    {
        return $this->tagsIDs;
    }
    /**
     * Массив числовых ID тегов.<br>   Что бы снять теги с карточки товара, необходимо передать пустой массив.<br> Чтобы добавить теги к уже имеющимся в карточке товара, необходимо в запросе передать новые теги и теги, которые уже есть в карточке товара.
     *
     * @param list<int> $tagsIDs
     *
     * @return self
     */
    public function setTagsIDs(array $tagsIDs): self
    {
        $this->initialized['tagsIDs'] = true;
        $this->tagsIDs = $tagsIDs;
        return $this;
    }
}