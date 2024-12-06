<?php

namespace Placestart\WildberriesApi\Model;

class ContentV2CardsErrorListGetResponse200DataItem extends \ArrayObject
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
     * Категория для который создавалось карточка товара с данной номенклатурой
     *
     * @var string
     */
    protected $object;
    /**
     * Артикул продавца
     *
     * @var string
     */
    protected $vendorCode;
    /**
     * Дата и время запроса на создание карточки товара с данной номенклатурой
     *
     * @var string
     */
    protected $updateAt;
    /**
     * Список ошибок из-за которых не обработался запрос на создание карточки товара с данной номенклатурой
     *
     * @var list<string>
     */
    protected $errors;
    /**
     * ID предмета
     *
     * @var int
     */
    protected $objectID;
    /**
     * Категория для который создавалось карточка товара с данной номенклатурой
     *
     * @return string
     */
    public function getObject(): string
    {
        return $this->object;
    }
    /**
     * Категория для который создавалось карточка товара с данной номенклатурой
     *
     * @param string $object
     *
     * @return self
     */
    public function setObject(string $object): self
    {
        $this->initialized['object'] = true;
        $this->object = $object;
        return $this;
    }
    /**
     * Артикул продавца
     *
     * @return string
     */
    public function getVendorCode(): string
    {
        return $this->vendorCode;
    }
    /**
     * Артикул продавца
     *
     * @param string $vendorCode
     *
     * @return self
     */
    public function setVendorCode(string $vendorCode): self
    {
        $this->initialized['vendorCode'] = true;
        $this->vendorCode = $vendorCode;
        return $this;
    }
    /**
     * Дата и время запроса на создание карточки товара с данной номенклатурой
     *
     * @return string
     */
    public function getUpdateAt(): string
    {
        return $this->updateAt;
    }
    /**
     * Дата и время запроса на создание карточки товара с данной номенклатурой
     *
     * @param string $updateAt
     *
     * @return self
     */
    public function setUpdateAt(string $updateAt): self
    {
        $this->initialized['updateAt'] = true;
        $this->updateAt = $updateAt;
        return $this;
    }
    /**
     * Список ошибок из-за которых не обработался запрос на создание карточки товара с данной номенклатурой
     *
     * @return list<string>
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
    /**
     * Список ошибок из-за которых не обработался запрос на создание карточки товара с данной номенклатурой
     *
     * @param list<string> $errors
     *
     * @return self
     */
    public function setErrors(array $errors): self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
    /**
     * ID предмета
     *
     * @return int
     */
    public function getObjectID(): int
    {
        return $this->objectID;
    }
    /**
     * ID предмета
     *
     * @param int $objectID
     *
     * @return self
     */
    public function setObjectID(int $objectID): self
    {
        $this->initialized['objectID'] = true;
        $this->objectID = $objectID;
        return $this;
    }
}