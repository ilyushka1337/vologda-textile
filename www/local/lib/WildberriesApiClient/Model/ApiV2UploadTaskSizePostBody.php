<?php

namespace Placestart\WildberriesApi\Model;

class ApiV2UploadTaskSizePostBody extends \ArrayObject
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
    * Размеры и цены для них. Максимум 1 000 размеров
    <br><br>
    Если новая цена со скидкой будет хотя бы в 3 раза меньше старой, она попадёт [в карантин](https://seller.wildberries.ru/discount-and-prices/quarantine) и товар будет продаваться по старой цене. Ошибка об этом будет в ответах методов состояний загрузок.
    <br><br>
    Вы можете изменить цену или скидку с помощью API либо вывести товар из карантина [в личном кабинете](https://seller.wildberries.ru/discount-and-prices/quarantine)
    
    *
    * @var list<SizeGoodReq>
    */
    protected $data;
    /**
    * Размеры и цены для них. Максимум 1 000 размеров
    <br><br>
    Если новая цена со скидкой будет хотя бы в 3 раза меньше старой, она попадёт [в карантин](https://seller.wildberries.ru/discount-and-prices/quarantine) и товар будет продаваться по старой цене. Ошибка об этом будет в ответах методов состояний загрузок.
    <br><br>
    Вы можете изменить цену или скидку с помощью API либо вывести товар из карантина [в личном кабинете](https://seller.wildberries.ru/discount-and-prices/quarantine)
    
    *
    * @return list<SizeGoodReq>
    */
    public function getData(): array
    {
        return $this->data;
    }
    /**
    * Размеры и цены для них. Максимум 1 000 размеров
    <br><br>
    Если новая цена со скидкой будет хотя бы в 3 раза меньше старой, она попадёт [в карантин](https://seller.wildberries.ru/discount-and-prices/quarantine) и товар будет продаваться по старой цене. Ошибка об этом будет в ответах методов состояний загрузок.
    <br><br>
    Вы можете изменить цену или скидку с помощью API либо вывести товар из карантина [в личном кабинете](https://seller.wildberries.ru/discount-and-prices/quarantine)
    
    *
    * @param list<SizeGoodReq> $data
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