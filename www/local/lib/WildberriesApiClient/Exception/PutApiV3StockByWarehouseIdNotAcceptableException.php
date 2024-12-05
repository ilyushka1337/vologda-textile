<?php

namespace Placestart\WildberriesApi\Exception;

class PutApiV3StockByWarehouseIdNotAcceptableException extends NotAcceptableException
{
    /**
     * @var \Placestart\WildberriesApi\Model\ResponseStatusNotAcceptable
     */
    private $responseStatusNotAcceptable;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Placestart\WildberriesApi\Model\ResponseStatusNotAcceptable $responseStatusNotAcceptable, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Обновление остатков заблокировано');
        $this->responseStatusNotAcceptable = $responseStatusNotAcceptable;
        $this->response = $response;
    }
    public function getResponseStatusNotAcceptable(): \Placestart\WildberriesApi\Model\ResponseStatusNotAcceptable
    {
        return $this->responseStatusNotAcceptable;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}