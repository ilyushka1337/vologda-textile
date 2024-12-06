<?php

namespace Placestart\WildberriesApi\Endpoint;

class PostContentV2CardsUploadAdd extends \Placestart\WildberriesApi\Runtime\Client\BaseEndpoint implements \Placestart\WildberriesApi\Runtime\Client\Endpoint
{
    /**
    * Добавляет к карточкам товаров новые номенклатуры.
    Габариты товаров можно указать только в **сантиметрах**.
    Добавление номенклатуры к карточке товара происходит асинхронно. После отправки запрос становится в очередь на обработку.
    Если ответ `Успешно` (`200`), но какие-то карточки не создались, получите [список несозданных номенклатур](/openapi/work-with-products#tag/Nomenklatury/paths/~1content~1v2~1cards~1error~1list/get).
    Максимальный размер запроса 10 Мб
    <div class="description_limit">
     Максимум 100 запросов в минуту для всех методов категории <a href="/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token">Контент</a> на один аккаунт продавца
    </div>
    
    *
    * @param null|\Placestart\WildberriesApi\Model\ContentV2CardsUploadAddPostBody $requestBody 
    */
    public function __construct(?\Placestart\WildberriesApi\Model\ContentV2CardsUploadAddPostBody $requestBody = null)
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
        return '/content/v2/cards/upload/add';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Placestart\WildberriesApi\Model\ContentV2CardsUploadAddPostBody) {
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
     * @throws \Placestart\WildberriesApi\Exception\PostContentV2CardsUploadAddBadRequestException
     * @throws \Placestart\WildberriesApi\Exception\PostContentV2CardsUploadAddUnauthorizedException
     * @throws \Placestart\WildberriesApi\Exception\PostContentV2CardsUploadAddRequestEntityTooLargeException
     * @throws \Placestart\WildberriesApi\Exception\PostContentV2CardsUploadAddTooManyRequestsException
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
            throw new \Placestart\WildberriesApi\Exception\PostContentV2CardsUploadAddBadRequestException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\ResponseBodyContentError400', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\PostContentV2CardsUploadAddUnauthorizedException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\Response401', 'json'), $response);
        }
        if (is_null($contentType) === false && (413 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\PostContentV2CardsUploadAddRequestEntityTooLargeException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\ContentV2CardsUploadAddPostResponse413', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\PostContentV2CardsUploadAddTooManyRequestsException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\Response429', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['HeaderApiKey'];
    }
}