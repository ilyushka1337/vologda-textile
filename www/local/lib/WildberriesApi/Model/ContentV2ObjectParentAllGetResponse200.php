<?php

namespace Placestart\WildberriesApi\Model;

class ContentV2ObjectParentAllGetResponse200 extends \ArrayObject
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
     * @var mixed
     */
    protected $data;
    /**
     * Флаг наличия ошибки
     *
     * @var bool
     */
    protected $error;
    /**
     * Описание ошибки
     *
     * @var string
     */
    protected $errorText;
    /**
     * Дополнительные ошибки
     *
     * @var string
     */
    protected $additionalErrors;
    /**
     * 
     *
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param mixed $data
     *
     * @return self
     */
    public function setData($data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
    /**
     * Флаг наличия ошибки
     *
     * @return bool
     */
    public function getError(): bool
    {
        return $this->error;
    }
    /**
     * Флаг наличия ошибки
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
     * Описание ошибки
     *
     * @return string
     */
    public function getErrorText(): string
    {
        return $this->errorText;
    }
    /**
     * Описание ошибки
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
    /**
     * Дополнительные ошибки
     *
     * @return string
     */
    public function getAdditionalErrors(): string
    {
        return $this->additionalErrors;
    }
    /**
     * Дополнительные ошибки
     *
     * @param string $additionalErrors
     *
     * @return self
     */
    public function setAdditionalErrors(string $additionalErrors): self
    {
        $this->initialized['additionalErrors'] = true;
        $this->additionalErrors = $additionalErrors;
        return $this;
    }
}