<?php

namespace Placestart\WildberriesApi\Model;

class ContentV2GetCardsListPostBodySettingsFilter extends \ArrayObject
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
     * Фильтр по фото:
     * `0` — только карточки без фото
     * `1` — только карточки с фото
     * `-1` — все карточки товара
     *
     * @var int
     */
    protected $withPhoto;
    /**
     * Поиск по артикулу продавца, артикулу WB, баркоду
     *
     * @var string
     */
    protected $textSearch;
    /**
     * Поиск по ID тегов
     *
     * @var list<int>
     */
    protected $tagIDs;
    /**
     * Фильтр по категории. `true` - только разрешённые, `false` - все. Не используется в песочнице.
     *
     * @var bool
     */
    protected $allowedCategoriesOnly;
    /**
     * Поиск по id предметов
     *
     * @var list<int>
     */
    protected $objectIDs;
    /**
     * Поиск по брендам
     *
     * @var list<string>
     */
    protected $brands;
    /**
     * Поиск по ID карточки товара
     *
     * @var int
     */
    protected $imtID;
    /**
     * Фильтр по фото:
     * `0` — только карточки без фото
     * `1` — только карточки с фото
     * `-1` — все карточки товара
     *
     * @return int
     */
    public function getWithPhoto(): int
    {
        return $this->withPhoto;
    }
    /**
     * Фильтр по фото:
     * `0` — только карточки без фото
     * `1` — только карточки с фото
     * `-1` — все карточки товара
     *
     * @param int $withPhoto
     *
     * @return self
     */
    public function setWithPhoto(int $withPhoto): self
    {
        $this->initialized['withPhoto'] = true;
        $this->withPhoto = $withPhoto;
        return $this;
    }
    /**
     * Поиск по артикулу продавца, артикулу WB, баркоду
     *
     * @return string
     */
    public function getTextSearch(): string
    {
        return $this->textSearch;
    }
    /**
     * Поиск по артикулу продавца, артикулу WB, баркоду
     *
     * @param string $textSearch
     *
     * @return self
     */
    public function setTextSearch(string $textSearch): self
    {
        $this->initialized['textSearch'] = true;
        $this->textSearch = $textSearch;
        return $this;
    }
    /**
     * Поиск по ID тегов
     *
     * @return list<int>
     */
    public function getTagIDs(): array
    {
        return $this->tagIDs;
    }
    /**
     * Поиск по ID тегов
     *
     * @param list<int> $tagIDs
     *
     * @return self
     */
    public function setTagIDs(array $tagIDs): self
    {
        $this->initialized['tagIDs'] = true;
        $this->tagIDs = $tagIDs;
        return $this;
    }
    /**
     * Фильтр по категории. `true` - только разрешённые, `false` - все. Не используется в песочнице.
     *
     * @return bool
     */
    public function getAllowedCategoriesOnly(): bool
    {
        return $this->allowedCategoriesOnly;
    }
    /**
     * Фильтр по категории. `true` - только разрешённые, `false` - все. Не используется в песочнице.
     *
     * @param bool $allowedCategoriesOnly
     *
     * @return self
     */
    public function setAllowedCategoriesOnly(bool $allowedCategoriesOnly): self
    {
        $this->initialized['allowedCategoriesOnly'] = true;
        $this->allowedCategoriesOnly = $allowedCategoriesOnly;
        return $this;
    }
    /**
     * Поиск по id предметов
     *
     * @return list<int>
     */
    public function getObjectIDs(): array
    {
        return $this->objectIDs;
    }
    /**
     * Поиск по id предметов
     *
     * @param list<int> $objectIDs
     *
     * @return self
     */
    public function setObjectIDs(array $objectIDs): self
    {
        $this->initialized['objectIDs'] = true;
        $this->objectIDs = $objectIDs;
        return $this;
    }
    /**
     * Поиск по брендам
     *
     * @return list<string>
     */
    public function getBrands(): array
    {
        return $this->brands;
    }
    /**
     * Поиск по брендам
     *
     * @param list<string> $brands
     *
     * @return self
     */
    public function setBrands(array $brands): self
    {
        $this->initialized['brands'] = true;
        $this->brands = $brands;
        return $this;
    }
    /**
     * Поиск по ID карточки товара
     *
     * @return int
     */
    public function getImtID(): int
    {
        return $this->imtID;
    }
    /**
     * Поиск по ID карточки товара
     *
     * @param int $imtID
     *
     * @return self
     */
    public function setImtID(int $imtID): self
    {
        $this->initialized['imtID'] = true;
        $this->imtID = $imtID;
        return $this;
    }
}