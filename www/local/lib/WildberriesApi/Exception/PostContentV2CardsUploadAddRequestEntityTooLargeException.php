<?php

namespace Placestart\WildberriesApi\Exception;

class PostContentV2CardsUploadAddRequestEntityTooLargeException extends RequestEntityTooLargeException
{
    /**
     * @var \Placestart\WildberriesApi\Model\ContentV2CardsUploadAddPostResponse413
     */
    private $contentV2CardsUploadAddPostResponse413;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Placestart\WildberriesApi\Model\ContentV2CardsUploadAddPostResponse413 $contentV2CardsUploadAddPostResponse413, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Превышен лимит объёма данных в запросе');
        $this->contentV2CardsUploadAddPostResponse413 = $contentV2CardsUploadAddPostResponse413;
        $this->response = $response;
    }
    public function getContentV2CardsUploadAddPostResponse413(): \Placestart\WildberriesApi\Model\ContentV2CardsUploadAddPostResponse413
    {
        return $this->contentV2CardsUploadAddPostResponse413;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}