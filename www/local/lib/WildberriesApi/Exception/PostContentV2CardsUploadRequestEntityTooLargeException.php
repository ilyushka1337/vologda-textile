<?php

namespace Placestart\WildberriesApi\Exception;

class PostContentV2CardsUploadRequestEntityTooLargeException extends RequestEntityTooLargeException
{
    /**
     * @var \Placestart\WildberriesApi\Model\ContentV2CardsUploadPostResponse413
     */
    private $contentV2CardsUploadPostResponse413;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Placestart\WildberriesApi\Model\ContentV2CardsUploadPostResponse413 $contentV2CardsUploadPostResponse413, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Превышен лимит объёма данных в запросе');
        $this->contentV2CardsUploadPostResponse413 = $contentV2CardsUploadPostResponse413;
        $this->response = $response;
    }
    public function getContentV2CardsUploadPostResponse413(): \Placestart\WildberriesApi\Model\ContentV2CardsUploadPostResponse413
    {
        return $this->contentV2CardsUploadPostResponse413;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}