<?php

namespace Placestart\WildberriesApi\Endpoint;

class PostContentV2CardsUpload extends \Placestart\WildberriesApi\Runtime\Client\BaseEndpoint implements \Placestart\WildberriesApi\Runtime\Client\Endpoint
{
    /**
    * Создаёт карточки товаров. В карточке можно указать описание и характеристики товара.<br>
    Как создать карточку:
    
     1. Получите [список всех категорий](/openapi/work-with-products#tag/Kategorii-predmety-i-harakteristiki/paths/~1content~1v2~1object~1parent~1all/get)
     2. Получите [список доступных предметов (подкатегорий)](/openapi/work-with-products#tag/Kategorii-predmety-i-harakteristiki/paths/~1content~1v2~1object~1all/get)
     3. Получите [характеристики, которые можно задавать в этом предмете (подкатегории)](/openapi/work-with-products#tag/Kategorii-predmety-i-harakteristiki/paths/~1content~1v2~1object~1charcs~1%7BsubjectId%7D/get). Для характеристик `Цвет`, `Пол`, `Страна производства`, `Сезон`, `Ставка НДС`, `ТНВЭД` используйте значения из [раздела](/openapi/work-with-products#tag/Kategorii-predmety-i-harakteristiki).
     4. Отправьте запрос. Если ответ `Успешно` (`200`), но какие-то карточки не создались, получите [список несозданных номенклатур](/openapi/work-with-products#tag/Nomenklatury/paths/~1content~1v2~1cards~1error~1list/get).
    
    Габариты товаров можно указать только в **сантиметрах**.<br>
    В одном запросе можно создать максимум 100 карточек (`imtID`) и по 30 номенклатур (`nmID`) в каждой. Максимальный размер запроса 10 Мб<br>
    Создание карточки товара происходит асинхронно. После отправки запрос становится в очередь на обработку.
    <div class="description_important">
     Карточка считается созданной, если создалась хотя бы одна номенклатура в ней. Если во время обработки запроса в очереди получены ошибки, то номенклатура считается ошибочной.
    </div>
    <div class="description_limit">
     Максимум 100 запросов в минуту для всех методов категории <a href="/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token">Контент</a> на один аккаунт продавца
    </div>
    
    *
    * @param null|\Placestart\WildberriesApi\Model\ContentV2CardsUploadPostBodyItem[] $requestBody 
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
        return '/content/v2/cards/upload';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if (is_array($this->body) and isset($this->body[0]) and $this->body[0] instanceof \Placestart\WildberriesApi\Model\ContentV2CardsUploadPostBodyItem) {
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
     * @throws \Placestart\WildberriesApi\Exception\PostContentV2CardsUploadBadRequestException
     * @throws \Placestart\WildberriesApi\Exception\PostContentV2CardsUploadUnauthorizedException
     * @throws \Placestart\WildberriesApi\Exception\PostContentV2CardsUploadRequestEntityTooLargeException
     * @throws \Placestart\WildberriesApi\Exception\PostContentV2CardsUploadTooManyRequestsException
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
            throw new \Placestart\WildberriesApi\Exception\PostContentV2CardsUploadBadRequestException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\ResponseBodyContentError400', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\PostContentV2CardsUploadUnauthorizedException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\Response401', 'json'), $response);
        }
        if (is_null($contentType) === false && (413 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\PostContentV2CardsUploadRequestEntityTooLargeException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\ContentV2CardsUploadPostResponse413', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\PostContentV2CardsUploadTooManyRequestsException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\Response429', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['HeaderApiKey'];
    }
}