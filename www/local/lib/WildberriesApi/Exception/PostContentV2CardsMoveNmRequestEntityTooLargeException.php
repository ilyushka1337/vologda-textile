<?php

namespace Placestart\WildberriesApi\Exception;

class PostContentV2CardsMoveNmRequestEntityTooLargeException extends RequestEntityTooLargeException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Превышен лимит объёма данных в запросе');
        $this->response = $response;
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}