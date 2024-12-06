<?php

namespace Placestart\WildberriesApi\Model;

class ResponseResponseGoodBufferHistories extends \ArrayObject
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
     * @var ResponseResponseGoodBufferHistoriesData
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
     * @return ResponseResponseGoodBufferHistoriesData
     */
    public function getData(): ResponseResponseGoodBufferHistoriesData
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ResponseResponseGoodBufferHistoriesData $data
     *
     * @return self
     */
    public function setData(ResponseResponseGoodBufferHistoriesData $data): self
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