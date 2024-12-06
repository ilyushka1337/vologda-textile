<?php

namespace Placestart\WildberriesApi\Model;

class ContentV2GetCardsTrashPostBodySettingsSort extends \ArrayObject
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
     * Сортировать по `trashedAt` (`false` - по убыванию, `true` - по возрастанию)
     *
     * @var bool
     */
    protected $ascending;
    /**
     * Сортировать по `trashedAt` (`false` - по убыванию, `true` - по возрастанию)
     *
     * @return bool
     */
    public function getAscending(): bool
    {
        return $this->ascending;
    }
    /**
     * Сортировать по `trashedAt` (`false` - по убыванию, `true` - по возрастанию)
     *
     * @param bool $ascending
     *
     * @return self
     */
    public function setAscending(bool $ascending): self
    {
        $this->initialized['ascending'] = true;
        $this->ascending = $ascending;
        return $this;
    }
}