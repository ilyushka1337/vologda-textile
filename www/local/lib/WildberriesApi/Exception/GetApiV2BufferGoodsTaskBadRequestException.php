<?php

namespace Placestart\WildberriesApi\Exception;

class GetApiV2BufferGoodsTaskBadRequestException extends BadRequestException
{
    /**
     * @var \Placestart\WildberriesApi\Model\ApiV2BufferGoodsTaskGetResponse400
     */
    private $apiV2BufferGoodsTaskGetResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Placestart\WildberriesApi\Model\ApiV2BufferGoodsTaskGetResponse400 $apiV2BufferGoodsTaskGetResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Неправильный запрос');
        $this->apiV2BufferGoodsTaskGetResponse400 = $apiV2BufferGoodsTaskGetResponse400;
        $this->response = $response;
    }
    public function getApiV2BufferGoodsTaskGetResponse400(): \Placestart\WildberriesApi\Model\ApiV2BufferGoodsTaskGetResponse400
    {
        return $this->apiV2BufferGoodsTaskGetResponse400;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}