<?php

namespace Placestart\WildberriesApi\Exception;

class PostContentV2CardsMoveNmForbiddenException extends ForbiddenException
{
    /**
     * @var \Placestart\WildberriesApi\Model\ResponseCardCreate
     */
    private $responseCardCreate;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Placestart\WildberriesApi\Model\ResponseCardCreate $responseCardCreate, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Доступ запрещён');
        $this->responseCardCreate = $responseCardCreate;
        $this->response = $response;
    }
    public function getResponseCardCreate(): \Placestart\WildberriesApi\Model\ResponseCardCreate
    {
        return $this->responseCardCreate;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}