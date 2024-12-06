<?php

namespace Placestart\WildberriesApi\Endpoint;

class PostContentV2CardsUpdate extends \Placestart\WildberriesApi\Runtime\Client\BaseEndpoint implements \Placestart\WildberriesApi\Runtime\Client\Endpoint
{
    /**
    * Обновляет карточки товаров. Данные для обновления можно получить через [список номенклатур](/openapi/work-with-products#tag/Nomenklatury/paths/~1content~1v2~1get~1cards~1list/post).
    
    <div class="description_important">
     Карточка товара перезаписывается при обновлении. Поэтому в запросе нужно передать <strong>все</strong> параметры карточки, в том числе те, которые вы не собираетесь обновлять.
    </div>
    
    Габариты товаров можно указать только в **сантиметрах**.
    
    Нельзя редактировать или удалять баркоды, но можно добавить баркод к существующему. Параметры `photos`, `video` и `tags` редактировать или удалять через этот метод нельзя.
    
    Если ответ `Успешно` (`200`), но какие-то карточки обновились, получите [список несозданных номенклатур](/openapi/work-with-products#tag/Nomenklatury/paths/~1content~1v2~1cards~1error~1list/get).
    
    В одном запросе можно отредактировать максимум 3000 номенклатур (`nmID`). Максимальный размер запроса 10 Мб
    
    <div class="description_limit">
     Максимум 100 запросов в минуту для всех методов категории <a href="/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token">Контент</a> на один аккаунт продавца
    </div>
    
    *
    * @param null|\Placestart\WildberriesApi\Model\ContentV2CardsUpdatePostBodyItem[] $requestBody 
    */
    public function __construct(?array $requestBody = null)
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
        return '/content/v2/cards/update';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if (is_array($this->body) and isset($this->body[0]) and $this->body[0] instanceof \Placestart\WildberriesApi\Model\ContentV2CardsUpdatePostBodyItem) {
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
     * @throws \Placestart\WildberriesApi\Exception\PostContentV2CardsUpdateBadRequestException
     * @throws \Placestart\WildberriesApi\Exception\PostContentV2CardsUpdateUnauthorizedException
     * @throws \Placestart\WildberriesApi\Exception\PostContentV2CardsUpdateForbiddenException
     * @throws \Placestart\WildberriesApi\Exception\PostContentV2CardsUpdateRequestEntityTooLargeException
     * @throws \Placestart\WildberriesApi\Exception\PostContentV2CardsUpdateTooManyRequestsException
     *
     * @return null|\Placestart\WildberriesApi\Model\ResponseCardCreate
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Placestart\WildberriesApi\Model\ResponseCardCreate', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\PostContentV2CardsUpdateBadRequestException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\ResponseBodyContentError400', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\PostContentV2CardsUpdateUnauthorizedException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\Response401', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\PostContentV2CardsUpdateForbiddenException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\ResponseBodyContentError403', 'json'), $response);
        }
        if (is_null($contentType) === false && (413 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\PostContentV2CardsUpdateRequestEntityTooLargeException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\ContentV2CardsUpdatePostResponse413', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\PostContentV2CardsUpdateTooManyRequestsException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\Response429', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['HeaderApiKey'];
    }
}