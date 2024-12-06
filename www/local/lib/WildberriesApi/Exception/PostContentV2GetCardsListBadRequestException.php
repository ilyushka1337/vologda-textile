<?php

namespace Placestart\WildberriesApi\Exception;

class PostContentV2GetCardsListBadRequestException extends BadRequestException
{
    /**
     * @var \Placestart\WildberriesApi\Model\ResponseBodyContentError400
     */
    private $responseBodyContentError400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Placestart\WildberriesApi\Model\ResponseBodyContentError400 $responseBodyContentError400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Неправильный запрос');
        $this->responseBodyContentError400 = $responseBodyContentError400;
        $this->response = $response;
    }
    public function getResponseBodyContentError400(): \Placestart\WildberriesApi\Model\ResponseBodyContentError400
    {
        return $this->responseBodyContentError400;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}