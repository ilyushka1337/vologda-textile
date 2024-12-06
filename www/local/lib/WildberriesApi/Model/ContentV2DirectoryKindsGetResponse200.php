<?php

namespace Placestart\WildberriesApi\Model;

class ContentV2DirectoryKindsGetResponse200 extends \ArrayObject
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
     * Массив значений для хар-ки Пол
     *
     * @var list<string>
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
     * @var string
     */
    protected $additionalErrors;
    /**
     * Массив значений для хар-ки Пол
     *
     * @return list<string>
     */
    public function getData(): array
    {
        return $this->data;
    }
    /**
     * Массив значений для хар-ки Пол
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