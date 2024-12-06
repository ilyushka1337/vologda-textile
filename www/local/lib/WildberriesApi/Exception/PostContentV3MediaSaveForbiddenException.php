<?php

namespace Placestart\WildberriesApi\Exception;

class PostContentV3MediaSaveForbiddenException extends ForbiddenException
{
    /**
     * @var \Placestart\WildberriesApi\Model\MediaErrors
     */
    private $mediaErrors;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Placestart\WildberriesApi\Model\MediaErrors $mediaErrors, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Доступ запрещён');
        $this->mediaErrors = $mediaErrors;
        $this->response = $response;
    }
    public function getMediaErrors(): \Placestart\WildberriesApi\Model\MediaErrors
    {
        return $this->mediaErrors;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}