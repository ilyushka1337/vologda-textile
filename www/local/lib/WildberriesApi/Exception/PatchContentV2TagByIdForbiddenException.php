<?php

namespace Placestart\WildberriesApi\Exception;

class PatchContentV2TagByIdForbiddenException extends ForbiddenException
{
    /**
     * @var \Placestart\WildberriesApi\Model\ResponseBodyContentError403
     */
    private $responseBodyContentError403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Placestart\WildberriesApi\Model\ResponseBodyContentError403 $responseBodyContentError403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Доступ запрещён');
        $this->responseBodyContentError403 = $responseBodyContentError403;
        $this->response = $response;
    }
    public function getResponseBodyContentError403(): \Placestart\WildberriesApi\Model\ResponseBodyContentError403
    {
        return $this->responseBodyContentError403;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}