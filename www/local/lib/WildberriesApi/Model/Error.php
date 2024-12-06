<?php

namespace Placestart\WildberriesApi\Model;

class Error extends \ArrayObject
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
     * Код ошибки
     *
     * @var string
     */
    protected $code;
    /**
     * Описание ошибки
     *
     * @var string
     */
    protected $message;
    /**
     * Дополнительные данные, обогащающие ошибку
     *
     * @var array<string, mixed>|null
     */
    protected $data;
    /**
     * Код ошибки
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     * Код ошибки
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Описание ошибки
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * Описание ошибки
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * Дополнительные данные, обогащающие ошибку
     *
     * @return array<string, mixed>|null
     */
    public function getData(): ?iterable
    {
        return $this->data;
    }
    /**
     * Дополнительные данные, обогащающие ошибку
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
}