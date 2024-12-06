<?php

namespace Placestart\WildberriesApi\Model;

class ContentV3MediaSavePostBody extends \ArrayObject
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
    protected $nmId;
    /**
     * Ссылки на изображения в том порядке, в котором они будут на карточке товара
     *
     * @var list<string>
     */
    protected $data;
    /**
     * Артикул WB
     *
     * @return int
     */
    public function getNmId(): int
    {
        return $this->nmId;
    }
    /**
     * Артикул WB
     *
     * @param int $nmId
     *
     * @return self
     */
    public function setNmId(int $nmId): self
    {
        $this->initialized['nmId'] = true;
        $this->nmId = $nmId;
        return $this;
    }
    /**
     * Ссылки на изображения в том порядке, в котором они будут на карточке товара
     *
     * @return list<string>
     */
    public function getData(): array
    {
        return $this->data;
    }
    /**
     * Ссылки на изображения в том порядке, в котором они будут на карточке товара
     *
     * @param list<string> $data
     *
     * @return self
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}