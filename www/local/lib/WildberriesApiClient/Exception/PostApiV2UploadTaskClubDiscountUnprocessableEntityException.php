<?php

namespace Placestart\WildberriesApi\Exception;

class PostApiV2UploadTaskClubDiscountUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \Placestart\WildberriesApi\Model\ResponseError
     */
    private $responseError;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Placestart\WildberriesApi\Model\ResponseError $responseError, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Неожидаемый результат');
        $this->responseError = $responseError;
        $this->response = $response;
    }
    public function getResponseError(): \Placestart\WildberriesApi\Model\ResponseError
    {
        return $this->responseError;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}