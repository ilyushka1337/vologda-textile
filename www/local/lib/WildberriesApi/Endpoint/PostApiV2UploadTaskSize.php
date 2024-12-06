<?php

namespace Placestart\WildberriesApi\Endpoint;

class PostApiV2UploadTaskSize extends \Placestart\WildberriesApi\Runtime\Client\BaseEndpoint implements \Placestart\WildberriesApi\Runtime\Client\Endpoint
{
    /**
    * Устанавливает цены отдельно для размеров. 
    Работает только для товаров из категорий, где можно устанавливать цены отдельно для разных размеров. Для [таких товаров](/openapi/work-with-products#tag/Ceny-i-skidki/paths/~1api~1v2~1list~1goods~1size~1nm/get) `editableSizePrice: true`
    <div class="description_limit">
     Максимум 10 запросов за 6 секунд для всех методов категории <a href="/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token">Цены и скидки</a> на один аккаунт продавца
    </div>
    
    *
    * @param \Placestart\WildberriesApi\Model\ApiV2UploadTaskSizePostBody $requestBody 
    */
    public function __construct(\Placestart\WildberriesApi\Model\ApiV2UploadTaskSizePostBody $requestBody)
    {
        $this->body = $requestBody;
    }
    use \Placestart\WildberriesApi\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/api/v2/upload/task/size';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Placestart\WildberriesApi\Model\ApiV2UploadTaskSizePostBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Placestart\WildberriesApi\Exception\PostApiV2UploadTaskSizeBadRequestException
     * @throws \Placestart\WildberriesApi\Exception\PostApiV2UploadTaskSizeUnauthorizedException
     * @throws \Placestart\WildberriesApi\Exception\PostApiV2UploadTaskSizeUnprocessableEntityException
     * @throws \Placestart\WildberriesApi\Exception\PostApiV2UploadTaskSizeTooManyRequestsException
     *
     * @return null|\Placestart\WildberriesApi\Model\TaskCreated|\Placestart\WildberriesApi\Model\TaskAlreadyExistsError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Placestart\WildberriesApi\Model\TaskCreated', 'json');
        }
        if (is_null($contentType) === false && (208 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Placestart\WildberriesApi\Model\TaskAlreadyExistsError', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\PostApiV2UploadTaskSizeBadRequestException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\ResponseError', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\PostApiV2UploadTaskSizeUnauthorizedException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\Response401', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\PostApiV2UploadTaskSizeUnprocessableEntityException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\ResponseError', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\PostApiV2UploadTaskSizeTooManyRequestsException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\Response429', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['HeaderApiKey'];
    }
}