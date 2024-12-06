<?php

namespace Placestart\WildberriesApi\Endpoint;

class PostApiV3StockByWarehouseId extends \Placestart\WildberriesApi\Runtime\Client\BaseEndpoint implements \Placestart\WildberriesApi\Runtime\Client\Endpoint
{
    protected $warehouseId;
    /**
    * Возвращает остатки товаров
    
    <div class="description_limit">  
     Максимум 300 запросов в минуту для всех методов категории <a href="/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token">Маркетплейс</a> на один аккаунт продавца
    </div>
    
    *
    * @param int $warehouseId ID склада продавца
    * @param \Placestart\WildberriesApi\Model\ApiV3StocksWarehouseIdPostBody $requestBody 
    */
    public function __construct(int $warehouseId, \Placestart\WildberriesApi\Model\ApiV3StocksWarehouseIdPostBody $requestBody)
    {
        $this->warehouseId = $warehouseId;
        $this->body = $requestBody;
    }
    use \Placestart\WildberriesApi\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{warehouseId}'], [$this->warehouseId], '/api/v3/stocks/{warehouseId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Placestart\WildberriesApi\Model\ApiV3StocksWarehouseIdPostBody) {
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
     * @throws \Placestart\WildberriesApi\Exception\PostApiV3StockByWarehouseIdBadRequestException
     * @throws \Placestart\WildberriesApi\Exception\PostApiV3StockByWarehouseIdUnauthorizedException
     * @throws \Placestart\WildberriesApi\Exception\PostApiV3StockByWarehouseIdForbiddenException
     * @throws \Placestart\WildberriesApi\Exception\PostApiV3StockByWarehouseIdNotFoundException
     * @throws \Placestart\WildberriesApi\Exception\PostApiV3StockByWarehouseIdTooManyRequestsException
     *
     * @return null|\Placestart\WildberriesApi\Model\ApiV3StocksWarehouseIdPostResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Placestart\WildberriesApi\Model\ApiV3StocksWarehouseIdPostResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\PostApiV3StockByWarehouseIdBadRequestException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\PostApiV3StockByWarehouseIdUnauthorizedException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\Response401', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\PostApiV3StockByWarehouseIdForbiddenException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\PostApiV3StockByWarehouseIdNotFoundException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\PostApiV3StockByWarehouseIdTooManyRequestsException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\Response429', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['HeaderApiKey'];
    }
}