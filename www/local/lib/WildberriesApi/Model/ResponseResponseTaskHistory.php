<?php

namespace Placestart\WildberriesApi\Model;

class ResponseResponseTaskHistory extends \ArrayObject
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
     * 
     *
     * @var SupplierTaskMetadata
     */
    protected $data;
    /**
     * Флаг ошибки
     *
     * @var bool
     */
    protected $error;
    /**
    * Текст ошибки
    
    <div class="description_important">
     Ошибка <code>The product is in quarantine</code> возникает, если новая цена со скидкой хотя бы в 3 раза меньше старой. Вы можете изменить цену или скидку с помощью API либо вывести товар из карантина <a href="https://seller.wildberries.ru/discount-and-prices/quarantine">в личном кабинете</a>
    </div>
    
    *
    * @var string
    */
    protected $errorText;
    /**
     * 
     *
     * @return SupplierTaskMetadata
     */
    public function getData(): SupplierTaskMetadata
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param SupplierTaskMetadata $data
     *
     * @return self
     */
    public function setData(SupplierTaskMetadata $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
    /**
     * Флаг ошибки
     *
     * @return bool
     */
    public function getError(): bool
    {
        return $this->error;
    }
    /**
     * Флаг ошибки
     *
     * @param bool $error
     *
     * @return self
     */
    public function setError(bool $error): self
    {
        $this->initialized['error'] = true;
        $this->error = $error;
        return $this;
    }
    /**
    * Текст ошибки
    
    <div class="description_important">
     Ошибка <code>The product is in quarantine</code> возникает, если новая цена со скидкой хотя бы в 3 раза меньше старой. Вы можете изменить цену или скидку с помощью API либо вывести товар из карантина <a href="https://seller.wildberries.ru/discount-and-prices/quarantine">в личном кабинете</a>
    </div>
    
    *
    * @return string
    */
    public function getErrorText(): string
    {
        return $this->errorText;
    }
    /**
    * Текст ошибки
    
    <div class="description_important">
     Ошибка <code>The product is in quarantine</code> возникает, если новая цена со скидкой хотя бы в 3 раза меньше старой. Вы можете изменить цену или скидку с помощью API либо вывести товар из карантина <a href="https://seller.wildberries.ru/discount-and-prices/quarantine">в личном кабинете</a>
    </div>
    
    *
    * @param string $errorText
    *
    * @return self
    */
    public function setErrorText(string $errorText): self
    {
        $this->initialized['errorText'] = true;
        $this->errorText = $errorText;
        return $this;
    }
}