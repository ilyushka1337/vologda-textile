<?php

namespace Placestart\WildberriesApi\Exception;

class GetApiV2HistoryGoodsTaskBadRequestException extends BadRequestException
{
    /**
     * @var \Placestart\WildberriesApi\Model\ApiV2HistoryGoodsTaskGetResponse400
     */
    private $apiV2HistoryGoodsTaskGetResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Placestart\WildberriesApi\Model\ApiV2HistoryGoodsTaskGetResponse400 $apiV2HistoryGoodsTaskGetResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Неправильный запрос');
        $this->apiV2HistoryGoodsTaskGetResponse400 = $apiV2HistoryGoodsTaskGetResponse400;
        $this->response = $response;
    }
    public function getApiV2HistoryGoodsTaskGetResponse400(): \Placestart\WildberriesApi\Model\ApiV2HistoryGoodsTaskGetResponse400
    {
        return $this->apiV2HistoryGoodsTaskGetResponse400;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}