<?php

namespace Placestart\WildberriesApi\Exception;

class PostContentV2TagNomenclatureLinkBadRequestException extends BadRequestException
{
    /**
     * @var \Placestart\WildberriesApi\Model\ResponseContentError4
     */
    private $responseContentError4;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Placestart\WildberriesApi\Model\ResponseContentError4 $responseContentError4, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Неправильный запрос');
        $this->responseContentError4 = $responseContentError4;
        $this->response = $response;
    }
    public function getResponseContentError4(): \Placestart\WildberriesApi\Model\ResponseContentError4
    {
        return $this->responseContentError4;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}