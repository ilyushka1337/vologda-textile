<?php

namespace Placestart\WildberriesApi\Endpoint;

class DeleteApiV3StockByWarehouseId extends \Placestart\WildberriesApi\Runtime\Client\BaseEndpoint implements \Placestart\WildberriesApi\Runtime\Client\Endpoint
{
    protected $warehouseId;
    /**
    * Удаляет остатки товаров
    <div class="description_important">
     <strong>Действие необратимо</strong>. Удаленный остаток будет необходимо загрузить повторно для возобновления продаж.
    </div>
    <div class="description_limit">  
     Максимум 300 запросов в минуту для всех методов категории <a href="/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token">Маркетплейс</a> на один аккаунт продавца
    </div>
    
    *
    * @param int $warehouseId ID склада продавца
    * @param \Placestart\WildberriesApi\Model\ApiV3StocksWarehouseIdDeleteBody $requestBody 
    */
    public function __construct(int $warehouseId, \Placestart\WildberriesApi\Model\ApiV3StocksWarehouseIdDeleteBody $requestBody)
    {
        $this->warehouseId = $warehouseId;
        $this->body = $requestBody;
    }
    use \Placestart\WildberriesApi\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{warehouseId}'], [$this->warehouseId], '/api/v3/stocks/{warehouseId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Placestart\WildberriesApi\Model\ApiV3StocksWarehouseIdDeleteBody) {
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
     * @throws \Placestart\WildberriesApi\Exception\DeleteApiV3StockByWarehouseIdBadRequestException
     * @throws \Placestart\WildberriesApi\Exception\DeleteApiV3StockByWarehouseIdUnauthorizedException
     * @throws \Placestart\WildberriesApi\Exception\DeleteApiV3StockByWarehouseIdForbiddenException
     * @throws \Placestart\WildberriesApi\Exception\DeleteApiV3StockByWarehouseIdNotFoundException
     * @throws \Placestart\WildberriesApi\Exception\DeleteApiV3StockByWarehouseIdTooManyRequestsException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\DeleteApiV3StockByWarehouseIdBadRequestException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\DeleteApiV3StockByWarehouseIdUnauthorizedException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\Response401', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\DeleteApiV3StockByWarehouseIdForbiddenException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\DeleteApiV3StockByWarehouseIdNotFoundException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\DeleteApiV3StockByWarehouseIdTooManyRequestsException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\Response429', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['HeaderApiKey'];
    }
}