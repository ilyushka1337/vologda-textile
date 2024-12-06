<?php

namespace Placestart\WildberriesApi\Exception;

class GetApiV2HistoryTaskBadRequestException extends BadRequestException
{
    /**
     * @var \Placestart\WildberriesApi\Model\ApiV2HistoryTasksGetResponse400
     */
    private $apiV2HistoryTasksGetResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Placestart\WildberriesApi\Model\ApiV2HistoryTasksGetResponse400 $apiV2HistoryTasksGetResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Неправильный запрос');
        $this->apiV2HistoryTasksGetResponse400 = $apiV2HistoryTasksGetResponse400;
        $this->response = $response;
    }
    public function getApiV2HistoryTasksGetResponse400(): \Placestart\WildberriesApi\Model\ApiV2HistoryTasksGetResponse400
    {
        return $this->apiV2HistoryTasksGetResponse400;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}