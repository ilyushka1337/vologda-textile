<?php

namespace Placestart\WildberriesApi\Model;

class ApiV2UploadTaskClubDiscountPostBody extends \ArrayObject
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
     * Товары и скидки WB Клуба для них. Максимум 1 000 товаров.
     *
     * @var list<ClubDiscReq>
     */
    protected $data;
    /**
     * Товары и скидки WB Клуба для них. Максимум 1 000 товаров.
     *
     * @return list<ClubDiscReq>
     */
    public function getData(): array
    {
        return $this->data;
    }
    /**
     * Товары и скидки WB Клуба для них. Максимум 1 000 товаров.
     *
     * @param list<ClubDiscReq> $data
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