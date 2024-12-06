<?php

namespace Placestart\WildberriesApi\Model;

class ContentV2GetCardsTrashPostBodySettingsFilter extends \ArrayObject
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
     * Поиск по артикулу продавца, артикулу WB, баркоду.
     *
     * @var string
     */
    protected $textSearch;
    /**
     * Поиск по артикулу продавца, артикулу WB, баркоду.
     *
     * @return string
     */
    public function getTextSearch(): string
    {
        return $this->textSearch;
    }
    /**
     * Поиск по артикулу продавца, артикулу WB, баркоду.
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
}