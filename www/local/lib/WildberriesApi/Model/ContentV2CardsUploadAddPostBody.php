<?php

namespace Placestart\WildberriesApi\Model;

class ContentV2CardsUploadAddPostBody extends \ArrayObject
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
     * `imtID` карточки товара, к которой добавляется номенклатура
     *
     * @var int
     */
    protected $imtID;
    /**
     * Структура добавляемой номенклатуры
     *
     * @var list<ContentV2CardsUploadAddPostBodyCardsToAddItem>
     */
    protected $cardsToAdd;
    /**
     * `imtID` карточки товара, к которой добавляется номенклатура
     *
     * @return int
     */
    public function getImtID(): int
    {
        return $this->imtID;
    }
    /**
     * `imtID` карточки товара, к которой добавляется номенклатура
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
    /**
     * Структура добавляемой номенклатуры
     *
     * @return list<ContentV2CardsUploadAddPostBodyCardsToAddItem>
     */
    public function getCardsToAdd(): array
    {
        return $this->cardsToAdd;
    }
    /**
     * Структура добавляемой номенклатуры
     *
     * @param list<ContentV2CardsUploadAddPostBodyCardsToAddItem> $cardsToAdd
     *
     * @return self
     */
    public function setCardsToAdd(array $cardsToAdd): self
    {
        $this->initialized['cardsToAdd'] = true;
        $this->cardsToAdd = $cardsToAdd;
        return $this;
    }
}