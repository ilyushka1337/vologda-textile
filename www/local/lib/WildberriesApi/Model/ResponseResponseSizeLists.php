<?php

namespace Placestart\WildberriesApi\Model;

class ResponseResponseSizeLists extends \ArrayObject
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
     * @var ResponseResponseSizeListsData
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
     *
     * @var string
     */
    protected $errorText;
    /**
     * 
     *
     * @return ResponseResponseSizeListsData
     */
    public function getData(): ResponseResponseSizeListsData
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ResponseResponseSizeListsData $data
     *
     * @return self
     */
    public function setData(ResponseResponseSizeListsData $data): self
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
     *
     * @return string
     */
    public function getErrorText(): string
    {
        return $this->errorText;
    }
    /**
     * Текст ошибки
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