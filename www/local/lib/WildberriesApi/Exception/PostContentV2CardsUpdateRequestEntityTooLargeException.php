<?php

namespace Placestart\WildberriesApi\Exception;

class PostContentV2CardsUpdateRequestEntityTooLargeException extends RequestEntityTooLargeException
{
    /**
     * @var \Placestart\WildberriesApi\Model\ContentV2CardsUpdatePostResponse413
     */
    private $contentV2CardsUpdatePostResponse413;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Placestart\WildberriesApi\Model\ContentV2CardsUpdatePostResponse413 $contentV2CardsUpdatePostResponse413, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Превышен лимит объёма данных в запросе');
        $this->contentV2CardsUpdatePostResponse413 = $contentV2CardsUpdatePostResponse413;
        $this->response = $response;
    }
    public function getContentV2CardsUpdatePostResponse413(): \Placestart\WildberriesApi\Model\ContentV2CardsUpdatePostResponse413
    {
        return $this->contentV2CardsUpdatePostResponse413;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}