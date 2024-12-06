<?php

namespace Placestart\WildberriesApi\Model;

class ContentV2GetCardsListPostBodySettings extends \ArrayObject
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
     * Параметр сортировки
     *
     * @var ContentV2GetCardsListPostBodySettingsSort
     */
    protected $sort;
    /**
     * Параметры фильтрации
     *
     * @var ContentV2GetCardsListPostBodySettingsFilter
     */
    protected $filter;
    /**
     * Курсор
     *
     * @var ContentV2GetCardsListPostBodySettingsCursor
     */
    protected $cursor;
    /**
     * Параметр сортировки
     *
     * @return ContentV2GetCardsListPostBodySettingsSort
     */
    public function getSort(): ContentV2GetCardsListPostBodySettingsSort
    {
        return $this->sort;
    }
    /**
     * Параметр сортировки
     *
     * @param ContentV2GetCardsListPostBodySettingsSort $sort
     *
     * @return self
     */
    public function setSort(ContentV2GetCardsListPostBodySettingsSort $sort): self
    {
        $this->initialized['sort'] = true;
        $this->sort = $sort;
        return $this;
    }
    /**
     * Параметры фильтрации
     *
     * @return ContentV2GetCardsListPostBodySettingsFilter
     */
    public function getFilter(): ContentV2GetCardsListPostBodySettingsFilter
    {
        return $this->filter;
    }
    /**
     * Параметры фильтрации
     *
     * @param ContentV2GetCardsListPostBodySettingsFilter $filter
     *
     * @return self
     */
    public function setFilter(ContentV2GetCardsListPostBodySettingsFilter $filter): self
    {
        $this->initialized['filter'] = true;
        $this->filter = $filter;
        return $this;
    }
    /**
     * Курсор
     *
     * @return ContentV2GetCardsListPostBodySettingsCursor
     */
    public function getCursor(): ContentV2GetCardsListPostBodySettingsCursor
    {
        return $this->cursor;
    }
    /**
     * Курсор
     *
     * @param ContentV2GetCardsListPostBodySettingsCursor $cursor
     *
     * @return self
     */
    public function setCursor(ContentV2GetCardsListPostBodySettingsCursor $cursor): self
    {
        $this->initialized['cursor'] = true;
        $this->cursor = $cursor;
        return $this;
    }
}