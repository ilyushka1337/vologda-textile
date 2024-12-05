<?php

namespace Placestart\WildberriesApi\Exception;

class PutApiV3StockByWarehouseIdBadRequestException extends BadRequestException
{
    /**
     * @var \Placestart\WildberriesApi\Model\Error
     */
    private $error;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Placestart\WildberriesApi\Model\Error $error, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Неправильный запрос');
        $this->error = $error;
        $this->response = $response;
    }
    public function getError(): \Placestart\WildberriesApi\Model\Error
    {
        return $this->error;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}