<?php

namespace Placestart\WildberriesApi\Endpoint;

class PostContentV2CardsMoveNm extends \Placestart\WildberriesApi\Runtime\Client\BaseEndpoint implements \Placestart\WildberriesApi\Runtime\Client\Endpoint
{
    /**
    * Объединяет и разъединяет номенклатуры в одной карточке товара.<br>
    Для объединения номенклатур отправьте список номенклатур **с указанием** ID карточки товара в теле запроса. В одной карточке можно объединять не более 30 номенклатур.<br>
    Для удаления номенклатуры из карточки товара отправьте номенклатуру **без указания** ID карточки в теле запроса. Для этой номенклатуры создастся новая карточка.<br>
    Если вы удалите из карточки товара сразу несколько номенклатур, все удаленные номенклатуры объединятся в одной новой карточке товара.<br>
    Чтобы присвоить каждой номенклатуре уникальную карточку товара, необходимо передавать по одной номенклатуре за запрос.<br>
    Максимальный размер запроса 10 Мб<br>
    <div class="description_important">
     Объединить можно только номенклатуры с одинаковыми предметами.
    </div>
    <div class="description_limit">
     Максимум 100 запросов в минуту для всех методов категории <a href="/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token">Контент</a> на один аккаунт продавца
    </div>
    
    *
    * @param null|mixed $requestBody 
    */
    public function __construct($requestBody = null)
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
        return '/content/v2/cards/moveNm';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if (isset($this->body)) {
            return [['Content-Type' => ['application/json']], json_encode($this->body)];
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
     * @throws \Placestart\WildberriesApi\Exception\PostContentV2CardsMoveNmBadRequestException
     * @throws \Placestart\WildberriesApi\Exception\PostContentV2CardsMoveNmUnauthorizedException
     * @throws \Placestart\WildberriesApi\Exception\PostContentV2CardsMoveNmForbiddenException
     * @throws \Placestart\WildberriesApi\Exception\PostContentV2CardsMoveNmRequestEntityTooLargeException
     * @throws \Placestart\WildberriesApi\Exception\PostContentV2CardsMoveNmTooManyRequestsException
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
            throw new \Placestart\WildberriesApi\Exception\PostContentV2CardsMoveNmBadRequestException($response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\PostContentV2CardsMoveNmUnauthorizedException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\Response401', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\PostContentV2CardsMoveNmForbiddenException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\ResponseCardCreate', 'json'), $response);
        }
        if (is_null($contentType) === false && (413 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\PostContentV2CardsMoveNmRequestEntityTooLargeException($response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\PostContentV2CardsMoveNmTooManyRequestsException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\Response429', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['HeaderApiKey'];
    }
}