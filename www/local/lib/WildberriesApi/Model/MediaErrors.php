<?php

namespace Placestart\WildberriesApi\Model;

class MediaErrors extends \ArrayObject
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
     * Дополнительные ошибки
     *
     * @var array<string, mixed>
     */
    protected $additionalErrors;
    /**
     * 
     *
     * @var array<string, mixed>
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
     * @return array<string, mixed>
     */
    public function getAdditionalErrors(): iterable
    {
        return $this->additionalErrors;
    }
    /**
     * Дополнительные ошибки
     *
     * @param array<string, mixed> $additionalErrors
     *
     * @return self
     */
    public function setAdditionalErrors(iterable $additionalErrors): self
    {
        $this->initialized['additionalErrors'] = true;
        $this->additionalErrors = $additionalErrors;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, mixed>
     */
    public function getData(): iterable
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param array<string, mixed> $data
     *
     * @return self
     */
    public function setData(iterable $data): self
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
}