<?php

namespace Placestart\WildberriesApi\Endpoint;

class GetApiV2HistoryTask extends \Placestart\WildberriesApi\Runtime\Client\BaseEndpoint implements \Placestart\WildberriesApi\Runtime\Client\Endpoint
{
    /**
    * Возвращает информацию про обработанную загрузку
    
    <div class="description_limit">
     Максимум 10 запросов за 6 секунд для всех методов категории <a href="/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token">Цены и скидки</a> на один аккаунт продавца
    </div>
    
    *
    * @param array $queryParameters {
    *     @var int $uploadID ID загрузки
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
        return '/api/v2/history/tasks';
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
        $optionsResolver->setDefined(['uploadID']);
        $optionsResolver->setRequired(['uploadID']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('uploadID', ['int']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Placestart\WildberriesApi\Exception\GetApiV2HistoryTaskBadRequestException
     * @throws \Placestart\WildberriesApi\Exception\GetApiV2HistoryTaskUnauthorizedException
     * @throws \Placestart\WildberriesApi\Exception\GetApiV2HistoryTaskTooManyRequestsException
     *
     * @return null|\Placestart\WildberriesApi\Model\ResponseResponseTaskHistory
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Placestart\WildberriesApi\Model\ResponseResponseTaskHistory', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\GetApiV2HistoryTaskBadRequestException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\ApiV2HistoryTasksGetResponse400', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\GetApiV2HistoryTaskUnauthorizedException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\Response401', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\GetApiV2HistoryTaskTooManyRequestsException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\Response429', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['HeaderApiKey'];
    }
}