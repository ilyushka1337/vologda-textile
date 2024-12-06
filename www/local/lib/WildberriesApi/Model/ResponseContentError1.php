<?php

namespace Placestart\WildberriesApi\Model;

class ResponseContentError1 extends \ArrayObject
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
     * @var array<string, mixed>|null
     */
    protected $data;
    /**
     * Флаг ошибки
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
     * @var ResponseContentError1AdditionalErrors
     */
    protected $additionalErrors;
    /**
     * 
     *
     * @return array<string, mixed>|null
     */
    public function getData(): ?iterable
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param array<string, mixed>|null $data
     *
     * @return self
     */
    public function setData(?iterable $data): self
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
     * @return ResponseContentError1AdditionalErrors
     */
    public function getAdditionalErrors(): ResponseContentError1AdditionalErrors
    {
        return $this->additionalErrors;
    }
    /**
     * Дополнительные ошибки
     *
     * @param ResponseContentError1AdditionalErrors $additionalErrors
     *
     * @return self
     */
    public function setAdditionalErrors(ResponseContentError1AdditionalErrors $additionalErrors): self
    {
        $this->initialized['additionalErrors'] = true;
        $this->additionalErrors = $additionalErrors;
        return $this;
    }
}