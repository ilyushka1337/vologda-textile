<?php

namespace Placestart\WildberriesApi\Endpoint;

class GetContentV2CardsErrorList extends \Placestart\WildberriesApi\Runtime\Client\BaseEndpoint implements \Placestart\WildberriesApi\Runtime\Client\Endpoint
{
    /**
    * Возвращает список номенклатур и список ошибок создания карточки товара<br>
    <div class="description_important">
     Чтобы убрать номенклатуру из списка ошибок, нужно повторно сделать запрос на <a href="/openapi/work-with-products#tag/Kartochki-tovarov/paths/~1content~1v2~1cards~1upload/post">создание карточки товара</a> с исправленными ошибками.
    </div>
    <div class="description_limit">
     Максимум 100 запросов в минуту для всех методов категории <a href="/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token">Контент</a> на один аккаунт продавца
    </div>
    
    *
    * @param array $queryParameters {
    *     @var string $locale Параметр выбора языка значений полей ответа (для которых предусмотрена мультиязычность).
    
    Не используется в песочнице.
    
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
        return '/content/v2/cards/error/list';
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
        $optionsResolver->setDefined(['locale']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('locale', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Placestart\WildberriesApi\Exception\GetContentV2CardsErrorListBadRequestException
     * @throws \Placestart\WildberriesApi\Exception\GetContentV2CardsErrorListUnauthorizedException
     * @throws \Placestart\WildberriesApi\Exception\GetContentV2CardsErrorListForbiddenException
     * @throws \Placestart\WildberriesApi\Exception\GetContentV2CardsErrorListTooManyRequestsException
     *
     * @return null|\Placestart\WildberriesApi\Model\ContentV2CardsErrorListGetResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Placestart\WildberriesApi\Model\ContentV2CardsErrorListGetResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\GetContentV2CardsErrorListBadRequestException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\ResponseBodyContentError400', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\GetContentV2CardsErrorListUnauthorizedException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\Response401', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\GetContentV2CardsErrorListForbiddenException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\ResponseBodyContentError403', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\GetContentV2CardsErrorListTooManyRequestsException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\Response429', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['HeaderApiKey'];
    }
}