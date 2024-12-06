<?php

namespace Placestart\WildberriesApi\Endpoint;

class GetContentV2ObjectAll extends \Placestart\WildberriesApi\Runtime\Client\BaseEndpoint implements \Placestart\WildberriesApi\Runtime\Client\Endpoint
{
    /**
    * Возвращает список всех доступных предметов, родительских категорий предметов и их ID
    
    <div class="description_limit">
     Максимум 100 запросов в минуту для всех методов категории <a href="/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token">Контент</a> на один аккаунт продавца
    </div>
    
    *
    * @param array $queryParameters {
    *     @var string $name Поиск по наименованию предмета (Носки), поиск работает по подстроке, искать можно на любом из поддерживаемых языков.
    *     @var int $limit Количество подкатегорий (предметов), максимум 1 000
    *     @var string $locale Язык полей ответа (`ru`, `en`, `zh`). Не используется в песочнице
    *     @var int $offset Номер позиции, с которой необходимо получить ответ
    *     @var int $parentID ID родительской категории предмета
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
        return '/content/v2/object/all';
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
        $optionsResolver->setDefined(['name', 'limit', 'locale', 'offset', 'parentID']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('name', ['string']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('locale', ['string']);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        $optionsResolver->addAllowedTypes('parentID', ['int']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Placestart\WildberriesApi\Exception\GetContentV2ObjectAllUnauthorizedException
     * @throws \Placestart\WildberriesApi\Exception\GetContentV2ObjectAllTooManyRequestsException
     *
     * @return null|\Placestart\WildberriesApi\Model\ContentV2ObjectAllGetResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Placestart\WildberriesApi\Model\ContentV2ObjectAllGetResponse200', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\GetContentV2ObjectAllUnauthorizedException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\Response401', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\GetContentV2ObjectAllTooManyRequestsException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\Response429', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['HeaderApiKey'];
    }
}