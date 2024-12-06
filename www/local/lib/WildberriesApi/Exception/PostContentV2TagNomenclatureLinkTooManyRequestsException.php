<?php

namespace Placestart\WildberriesApi\Exception;

class PostContentV2TagNomenclatureLinkTooManyRequestsException extends TooManyRequestsException
{
    /**
     * @var \Placestart\WildberriesApi\Model\Response429
     */
    private $response429;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Placestart\WildberriesApi\Model\Response429 $response429, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Слишком много запросов');
        $this->response429 = $response429;
        $this->response = $response;
    }
    public function getResponse429(): \Placestart\WildberriesApi\Model\Response429
    {
        return $this->response429;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}