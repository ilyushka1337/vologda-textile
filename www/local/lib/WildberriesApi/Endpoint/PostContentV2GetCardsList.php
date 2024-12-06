<?php

namespace Placestart\WildberriesApi\Endpoint;

class PostContentV2GetCardsList extends \Placestart\WildberriesApi\Runtime\Client\BaseEndpoint implements \Placestart\WildberriesApi\Runtime\Client\Endpoint
{
    protected $accept;
    /**
    * <div class="description_auth">  
     Метод доступен по <a href="/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token">токену</a> с категорией <strong>Продвижение</strong>
    </div>
    
    Возвращает список созданных номенклатур.<br>
    
    Чтобы получить **больше 100** номенклатур, необходимо воспользоваться пагинацией:
    
     <ol>
       <li>Сделать первый запрос: <br>
         <pre style="background-color: rgb(38 50 56 / 5%); color: #e53935">
           {
             "settings": {                      
               "cursor": {
                 "limit": 100
               },
               "filter": {
                 "withPhoto": -1
               }
             }
           }</pre>                               
       </li>
       <li>Пройти в конец полученного списка номенклатур, скопировать из <code>cursor</code> две строки:
         <ul>
           <li><code>"updatedAt": "***"</code></li>
           <li><code>"nmID": ***</code></li>
         </ul>
       <li>Вставить скопированные строки в <code>cursor</code> запроса, повторить запрос. </li>
       <li>Повторять пункты <b>2</b> и <b>3</b>, пока <code>total</code> в ответе не станет меньше чем <code>limit</code> в запросе. Это будет означать, что вы получили все карточки.
     </ol>
    
    <div class="description_important">
     В ответе метода не будет карточек, находящихся в корзине. Получить такие карточки можно через <a href="/openapi/work-with-products#tag/Nomenklatury/paths/~1content~1v2~1get~1cards~1trash/post">отдельный метод</a>.
    </div>    
    
    <div class="description_limit">
     Максимум 100 запросов в минуту для всех методов категории <a href="/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token">Контент</a> на один аккаунт продавца
    </div>
    
    *
    * @param \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostBody $requestBody 
    * @param array $queryParameters {
    *     @var string $locale Язык для перевода полей ответа `name`, `value` и `object`:  `ru` - русский, `en` - английский, `zh` - китайский.
    
    Не используется в песочнице.  
    
    * }
    * @param array $accept Accept content header application/json|plain/text
    */
    public function __construct(\Placestart\WildberriesApi\Model\ContentV2GetCardsListPostBody $requestBody, array $queryParameters = [], array $accept = [])
    {
        $this->body = $requestBody;
        $this->queryParameters = $queryParameters;
        $this->accept = $accept;
    }
    use \Placestart\WildberriesApi\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/content/v2/get/cards/list';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Placestart\WildberriesApi\Model\ContentV2GetCardsListPostBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/json', 'plain/text']];
        }
        return $this->accept;
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
     * @throws \Placestart\WildberriesApi\Exception\PostContentV2GetCardsListBadRequestException
     * @throws \Placestart\WildberriesApi\Exception\PostContentV2GetCardsListUnauthorizedException
     * @throws \Placestart\WildberriesApi\Exception\PostContentV2GetCardsListForbiddenException
     * @throws \Placestart\WildberriesApi\Exception\PostContentV2GetCardsListTooManyRequestsException
     *
     * @return null|\Placestart\WildberriesApi\Model\ContentV2GetCardsListPostResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Placestart\WildberriesApi\Model\ContentV2GetCardsListPostResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\PostContentV2GetCardsListBadRequestException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\ResponseBodyContentError400', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\PostContentV2GetCardsListUnauthorizedException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\Response401', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\PostContentV2GetCardsListForbiddenException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\ResponseBodyContentError403', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\PostContentV2GetCardsListTooManyRequestsException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\Response429', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['HeaderApiKey'];
    }
}