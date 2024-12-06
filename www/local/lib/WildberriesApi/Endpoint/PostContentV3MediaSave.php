<?php

namespace Placestart\WildberriesApi\Endpoint;

class PostContentV3MediaSave extends \Placestart\WildberriesApi\Runtime\Client\BaseEndpoint implements \Placestart\WildberriesApi\Runtime\Client\Endpoint
{
    /**
    * Меняет набор медиафайлов для товара (номенклатуры).
    <div class="description_important">
     Новые медиафайлы (<code>data</code>) полностью заменяют старые (<code>mediaFiles</code>). Чтобы добавить новые медиафайлы, укажите ссылки и на новые, и на старые медиафайлы.
    </div>
    Требования к изображениям:
    
     * максимум изображений для одного товара (номенклатуры) — 30
     * минимальное разрешение — 700×900 px
     * максимальный размер — 32 Мб
     * минимальное качество — 65%
     * форматы — JPG, PNG, BMP, GIF (статичные), WebP
    
    Требования к видео:
    
     * максимум 1 видео для одного товара (номенклатуры)
     * максимальный размер — 50 Мб
     * форматы — MOV, MP4
    
    Если хотя бы одно изображение в запросе не соответствует требованиям, то даже при успешном ответе ни одно изображение не загрузится
    <div class="description_limit">
     Максимум 100 запросов в минуту для всех методов категории <a href="/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token">Контент</a> на один аккаунт продавца
    </div>
    
    *
    * @param \Placestart\WildberriesApi\Model\ContentV3MediaSavePostBody $requestBody 
    */
    public function __construct(\Placestart\WildberriesApi\Model\ContentV3MediaSavePostBody $requestBody)
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
        return '/content/v3/media/save';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Placestart\WildberriesApi\Model\ContentV3MediaSavePostBody) {
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
     * @throws \Placestart\WildberriesApi\Exception\PostContentV3MediaSaveBadRequestException
     * @throws \Placestart\WildberriesApi\Exception\PostContentV3MediaSaveUnauthorizedException
     * @throws \Placestart\WildberriesApi\Exception\PostContentV3MediaSaveForbiddenException
     * @throws \Placestart\WildberriesApi\Exception\PostContentV3MediaSaveConflictException
     * @throws \Placestart\WildberriesApi\Exception\PostContentV3MediaSaveUnprocessableEntityException
     * @throws \Placestart\WildberriesApi\Exception\PostContentV3MediaSaveTooManyRequestsException
     *
     * @return null|\Placestart\WildberriesApi\Model\ContentV3MediaSavePostResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Placestart\WildberriesApi\Model\ContentV3MediaSavePostResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\PostContentV3MediaSaveBadRequestException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\MediaErrors', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\PostContentV3MediaSaveUnauthorizedException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\Response401', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\PostContentV3MediaSaveForbiddenException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\MediaErrors', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\PostContentV3MediaSaveConflictException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\MediaErrors', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\PostContentV3MediaSaveUnprocessableEntityException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\MediaErrors', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\PostContentV3MediaSaveTooManyRequestsException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\Response429', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['HeaderApiKey'];
    }
}