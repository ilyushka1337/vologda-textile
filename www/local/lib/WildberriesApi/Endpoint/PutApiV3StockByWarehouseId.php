<?php

namespace Placestart\WildberriesApi\Endpoint;

class PutApiV3StockByWarehouseId extends \Placestart\WildberriesApi\Runtime\Client\BaseEndpoint implements \Placestart\WildberriesApi\Runtime\Client\Endpoint
{
    protected $warehouseId;
    /**
    * Обновляет остатки товаров
    <div class="description_important">
     Имена параметров запроса не валидируются. При отправке некорректных имен вы получите успешный ответ (<code>204</code>), но остатки не обновятся.
    </div>
    <div class="description_limit">  
     Максимум 300 запросов в минуту для всех методов категории <a href="/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token">Маркетплейс</a> на один аккаунт продавца
    </div>
    
    *
    * @param int $warehouseId ID склада продавца
    * @param null|\Placestart\WildberriesApi\Model\ApiV3StocksWarehouseIdPutBody $requestBody 
    */
    public function __construct(int $warehouseId, ?\Placestart\WildberriesApi\Model\ApiV3StocksWarehouseIdPutBody $requestBody = null)
    {
        $this->warehouseId = $warehouseId;
        $this->body = $requestBody;
    }
    use \Placestart\WildberriesApi\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{warehouseId}'], [$this->warehouseId], '/api/v3/stocks/{warehouseId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Placestart\WildberriesApi\Model\ApiV3StocksWarehouseIdPutBody) {
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
     * @throws \Placestart\WildberriesApi\Exception\PutApiV3StockByWarehouseIdBadRequestException
     * @throws \Placestart\WildberriesApi\Exception\PutApiV3StockByWarehouseIdUnauthorizedException
     * @throws \Placestart\WildberriesApi\Exception\PutApiV3StockByWarehouseIdForbiddenException
     * @throws \Placestart\WildberriesApi\Exception\PutApiV3StockByWarehouseIdNotFoundException
     * @throws \Placestart\WildberriesApi\Exception\PutApiV3StockByWarehouseIdNotAcceptableException
     * @throws \Placestart\WildberriesApi\Exception\PutApiV3StockByWarehouseIdConflictException
     * @throws \Placestart\WildberriesApi\Exception\PutApiV3StockByWarehouseIdTooManyRequestsException
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
            throw new \Placestart\WildberriesApi\Exception\PutApiV3StockByWarehouseIdBadRequestException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\PutApiV3StockByWarehouseIdUnauthorizedException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\Response401', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\PutApiV3StockByWarehouseIdForbiddenException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\PutApiV3StockByWarehouseIdNotFoundException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (406 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\PutApiV3StockByWarehouseIdNotAcceptableException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\ResponseStatusNotAcceptable', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\PutApiV3StockByWarehouseIdConflictException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\Error[]', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\PutApiV3StockByWarehouseIdTooManyRequestsException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\Response429', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['HeaderApiKey'];
    }
}