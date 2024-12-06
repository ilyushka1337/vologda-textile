<?php

namespace Placestart\WildberriesApi\Model;

class ContentV2GetCardsTrashPostResponse200 extends \ArrayObject
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
     * Массив карточек товаров
     *
     * @var list<ContentV2GetCardsTrashPostResponse200CardsItem>
     */
    protected $cards;
    /**
     * 
     *
     * @var ContentV2GetCardsTrashPostResponse200Cursor
     */
    protected $cursor;
    /**
     * Массив карточек товаров
     *
     * @return list<ContentV2GetCardsTrashPostResponse200CardsItem>
     */
    public function getCards(): array
    {
        return $this->cards;
    }
    /**
     * Массив карточек товаров
     *
     * @param list<ContentV2GetCardsTrashPostResponse200CardsItem> $cards
     *
     * @return self
     */
    public function setCards(array $cards): self
    {
        $this->initialized['cards'] = true;
        $this->cards = $cards;
        return $this;
    }
    /**
     * 
     *
     * @return ContentV2GetCardsTrashPostResponse200Cursor
     */
    public function getCursor(): ContentV2GetCardsTrashPostResponse200Cursor
    {
        return $this->cursor;
    }
    /**
     * 
     *
     * @param ContentV2GetCardsTrashPostResponse200Cursor $cursor
     *
     * @return self
     */
    public function setCursor(ContentV2GetCardsTrashPostResponse200Cursor $cursor): self
    {
        $this->initialized['cursor'] = true;
        $this->cursor = $cursor;
        return $this;
    }
}