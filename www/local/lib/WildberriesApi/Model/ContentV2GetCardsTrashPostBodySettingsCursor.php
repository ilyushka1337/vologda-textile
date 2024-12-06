<?php

namespace Placestart\WildberriesApi\Model;

class ContentV2GetCardsTrashPostBodySettingsCursor extends \ArrayObject
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
     * Сколько карточек товара выдать в ответе
     *
     * @var int
     */
    protected $limit;
    /**
     * Сколько карточек товара выдать в ответе
     *
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }
    /**
     * Сколько карточек товара выдать в ответе
     *
     * @param int $limit
     *
     * @return self
     */
    public function setLimit(int $limit): self
    {
        $this->initialized['limit'] = true;
        $this->limit = $limit;
        return $this;
    }
}