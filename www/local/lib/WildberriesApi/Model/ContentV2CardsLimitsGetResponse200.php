<?php

namespace Placestart\WildberriesApi\Model;

class ContentV2CardsLimitsGetResponse200 extends \ArrayObject
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
     * @var ContentV2CardsLimitsGetResponse200Data
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
     * @var string|null
     */
    protected $additionalErrors;
    /**
     * 
     *
     * @return ContentV2CardsLimitsGetResponse200Data
     */
    public function getData(): ContentV2CardsLimitsGetResponse200Data
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ContentV2CardsLimitsGetResponse200Data $data
     *
     * @return self
     */
    public function setData(ContentV2CardsLimitsGetResponse200Data $data): self
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
     * @return string|null
     */
    public function getAdditionalErrors(): ?string
    {
        return $this->additionalErrors;
    }
    /**
     * Дополнительные ошибки
     *
     * @param string|null $additionalErrors
     *
     * @return self
     */
    public function setAdditionalErrors(?string $additionalErrors): self
    {
        $this->initialized['additionalErrors'] = true;
        $this->additionalErrors = $additionalErrors;
        return $this;
    }
}