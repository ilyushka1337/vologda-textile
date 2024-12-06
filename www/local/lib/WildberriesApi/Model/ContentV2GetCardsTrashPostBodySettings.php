<?php

namespace Placestart\WildberriesApi\Model;

class ContentV2GetCardsTrashPostBodySettings extends \ArrayObject
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
     * @var ContentV2GetCardsTrashPostBodySettingsSort
     */
    protected $sort;
    /**
     * Курсор
     *
     * @var ContentV2GetCardsTrashPostBodySettingsCursor
     */
    protected $cursor;
    /**
     * Параметры фильтрации
     *
     * @var ContentV2GetCardsTrashPostBodySettingsFilter
     */
    protected $filter;
    /**
     * Параметр сортировки
     *
     * @return ContentV2GetCardsTrashPostBodySettingsSort
     */
    public function getSort(): ContentV2GetCardsTrashPostBodySettingsSort
    {
        return $this->sort;
    }
    /**
     * Параметр сортировки
     *
     * @param ContentV2GetCardsTrashPostBodySettingsSort $sort
     *
     * @return self
     */
    public function setSort(ContentV2GetCardsTrashPostBodySettingsSort $sort): self
    {
        $this->initialized['sort'] = true;
        $this->sort = $sort;
        return $this;
    }
    /**
     * Курсор
     *
     * @return ContentV2GetCardsTrashPostBodySettingsCursor
     */
    public function getCursor(): ContentV2GetCardsTrashPostBodySettingsCursor
    {
        return $this->cursor;
    }
    /**
     * Курсор
     *
     * @param ContentV2GetCardsTrashPostBodySettingsCursor $cursor
     *
     * @return self
     */
    public function setCursor(ContentV2GetCardsTrashPostBodySettingsCursor $cursor): self
    {
        $this->initialized['cursor'] = true;
        $this->cursor = $cursor;
        return $this;
    }
    /**
     * Параметры фильтрации
     *
     * @return ContentV2GetCardsTrashPostBodySettingsFilter
     */
    public function getFilter(): ContentV2GetCardsTrashPostBodySettingsFilter
    {
        return $this->filter;
    }
    /**
     * Параметры фильтрации
     *
     * @param ContentV2GetCardsTrashPostBodySettingsFilter $filter
     *
     * @return self
     */
    public function setFilter(ContentV2GetCardsTrashPostBodySettingsFilter $filter): self
    {
        $this->initialized['filter'] = true;
        $this->filter = $filter;
        return $this;
    }
}