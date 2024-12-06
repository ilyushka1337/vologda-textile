<?php

namespace Placestart\WildberriesApi\Model;

class ContentV2GetCardsListPostResponse200 extends \ArrayObject
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
     * Список карточек товара
     *
     * @var list<ContentV2GetCardsListPostResponse200CardsItem>
     */
    protected $cards;
    /**
     * Пагинатор
     *
     * @var ContentV2GetCardsListPostResponse200Cursor
     */
    protected $cursor;
    /**
     * Список карточек товара
     *
     * @return list<ContentV2GetCardsListPostResponse200CardsItem>
     */
    public function getCards(): array
    {
        return $this->cards;
    }
    /**
     * Список карточек товара
     *
     * @param list<ContentV2GetCardsListPostResponse200CardsItem> $cards
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
     * Пагинатор
     *
     * @return ContentV2GetCardsListPostResponse200Cursor
     */
    public function getCursor(): ContentV2GetCardsListPostResponse200Cursor
    {
        return $this->cursor;
    }
    /**
     * Пагинатор
     *
     * @param ContentV2GetCardsListPostResponse200Cursor $cursor
     *
     * @return self
     */
    public function setCursor(ContentV2GetCardsListPostResponse200Cursor $cursor): self
    {
        $this->initialized['cursor'] = true;
        $this->cursor = $cursor;
        return $this;
    }
}