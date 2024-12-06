<?php

namespace Placestart\WildberriesApi\Endpoint;

class GetApiV2ListGoodsSizeNm extends \Placestart\WildberriesApi\Runtime\Client\BaseEndpoint implements \Placestart\WildberriesApi\Runtime\Client\Endpoint
{
    /**
    * Возвращает информацию о всех размерах одного товара. 
    Работает только для товаров из категорий, где можно устанавливать цены отдельно для разных размеров. Для таких товаров `editableSizePrice: true`
    <div class="description_limit">
     Максимум 10 запросов за 6 секунд для всех методов категории <a href="/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token">Цены и скидки</a> на один аккаунт продавца
    </div>
    
    *
    * @param array $queryParameters {
    *     @var int $limit Сколько элементов вывести на одной странице (пагинация). Максимум 1 000 элементов
    *     @var int $offset После какого элемента выдавать данные
    *     @var int $nmID Артикул WB
    * }
    */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \Placestart\WildberriesApi\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/api/v2/list/goods/size/nm';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['limit', 'offset', 'nmID']);
        $optionsResolver->setRequired(['limit', 'nmID']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        $optionsResolver->addAllowedTypes('nmID', ['int']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Placestart\WildberriesApi\Exception\GetApiV2ListGoodsSizeNmBadRequestException
     * @throws \Placestart\WildberriesApi\Exception\GetApiV2ListGoodsSizeNmUnauthorizedException
     * @throws \Placestart\WildberriesApi\Exception\GetApiV2ListGoodsSizeNmTooManyRequestsException
     *
     * @return null|\Placestart\WildberriesApi\Model\ResponseResponseSizeLists
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Placestart\WildberriesApi\Model\ResponseResponseSizeLists', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\GetApiV2ListGoodsSizeNmBadRequestException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\ResponseError', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\GetApiV2ListGoodsSizeNmUnauthorizedException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\Response401', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\GetApiV2ListGoodsSizeNmTooManyRequestsException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\Response429', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['HeaderApiKey'];
    }
}