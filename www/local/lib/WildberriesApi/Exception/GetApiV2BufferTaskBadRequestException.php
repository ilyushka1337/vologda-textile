<?php

namespace Placestart\WildberriesApi\Exception;

class GetApiV2BufferTaskBadRequestException extends BadRequestException
{
    /**
     * @var \Placestart\WildberriesApi\Model\ApiV2BufferTasksGetResponse400
     */
    private $apiV2BufferTasksGetResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Placestart\WildberriesApi\Model\ApiV2BufferTasksGetResponse400 $apiV2BufferTasksGetResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Неправильный запрос');
        $this->apiV2BufferTasksGetResponse400 = $apiV2BufferTasksGetResponse400;
        $this->response = $response;
    }
    public function getApiV2BufferTasksGetResponse400(): \Placestart\WildberriesApi\Model\ApiV2BufferTasksGetResponse400
    {
        return $this->apiV2BufferTasksGetResponse400;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}