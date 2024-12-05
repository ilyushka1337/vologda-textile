<?php

namespace Placestart\WildberriesApi\Exception;

class PutApiV3StockByWarehouseIdConflictException extends ConflictException
{
    /**
     * @var \Placestart\WildberriesApi\Model\Error[][]
     */
    private $errorList;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct($errorList, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Ошибка обновления остатков');
        $this->errorList = $errorList;
        $this->response = $response;
    }
    public function getErrorList()
    {
        return $this->errorList;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}