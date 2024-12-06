<?php

namespace Placestart\WildberriesApi\Model;

class Response401 extends \ArrayObject
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
     * Заголовок ошибки
     *
     * @var string
     */
    protected $title;
    /**
     * Детали ошибки
     *
     * @var string
     */
    protected $detail;
    /**
     * Внутренний код ошибки
     *
     * @var string
     */
    protected $code;
    /**
     * Уникальный ID запроса
     *
     * @var string
     */
    protected $requestId;
    /**
     * ID внутреннего сервиса WB
     *
     * @var string
     */
    protected $origin;
    /**
     * HTTP статус-код
     *
     * @var float
     */
    protected $status;
    /**
     * Расшифровка HTTP статус-кода
     *
     * @var string
     */
    protected $statusText;
    /**
     * Дата и время запроса
     *
     * @var string
     */
    protected $timestamp;
    /**
     * Заголовок ошибки
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
    /**
     * Заголовок ошибки
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * Детали ошибки
     *
     * @return string
     */
    public function getDetail(): string
    {
        return $this->detail;
    }
    /**
     * Детали ошибки
     *
     * @param string $detail
     *
     * @return self
     */
    public function setDetail(string $detail): self
    {
        $this->initialized['detail'] = true;
        $this->detail = $detail;
        return $this;
    }
    /**
     * Внутренний код ошибки
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     * Внутренний код ошибки
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
     * Уникальный ID запроса
     *
     * @return string
     */
    public function getRequestId(): string
    {
        return $this->requestId;
    }
    /**
     * Уникальный ID запроса
     *
     * @param string $requestId
     *
     * @return self
     */
    public function setRequestId(string $requestId): self
    {
        $this->initialized['requestId'] = true;
        $this->requestId = $requestId;
        return $this;
    }
    /**
     * ID внутреннего сервиса WB
     *
     * @return string
     */
    public function getOrigin(): string
    {
        return $this->origin;
    }
    /**
     * ID внутреннего сервиса WB
     *
     * @param string $origin
     *
     * @return self
     */
    public function setOrigin(string $origin): self
    {
        $this->initialized['origin'] = true;
        $this->origin = $origin;
        return $this;
    }
    /**
     * HTTP статус-код
     *
     * @return float
     */
    public function getStatus(): float
    {
        return $this->status;
    }
    /**
     * HTTP статус-код
     *
     * @param float $status
     *
     * @return self
     */
    public function setStatus(float $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * Расшифровка HTTP статус-кода
     *
     * @return string
     */
    public function getStatusText(): string
    {
        return $this->statusText;
    }
    /**
     * Расшифровка HTTP статус-кода
     *
     * @param string $statusText
     *
     * @return self
     */
    public function setStatusText(string $statusText): self
    {
        $this->initialized['statusText'] = true;
        $this->statusText = $statusText;
        return $this;
    }
    /**
     * Дата и время запроса
     *
     * @return string
     */
    public function getTimestamp(): string
    {
        return $this->timestamp;
    }
    /**
     * Дата и время запроса
     *
     * @param string $timestamp
     *
     * @return self
     */
    public function setTimestamp(string $timestamp): self
    {
        $this->initialized['timestamp'] = true;
        $this->timestamp = $timestamp;
        return $this;
    }
}