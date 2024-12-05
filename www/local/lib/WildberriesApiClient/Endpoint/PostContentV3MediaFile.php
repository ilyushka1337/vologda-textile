<?php

namespace Placestart\WildberriesApi\Endpoint;

class PostContentV3MediaFile extends \Placestart\WildberriesApi\Runtime\Client\BaseEndpoint implements \Placestart\WildberriesApi\Runtime\Client\Endpoint
{
    protected $accept;
    /**
    * Добавляет один медиафайл для товара (номенклатуры).
    
    Требования к изображениям:
    
     * максимум изображений для одного товара (номенклатуры) — 30
     * минимальное разрешение — 700x900 px
     * максимальный размер — 32 Мб
     * минимальное качество — 65%
     * форматы — JPG, PNG, BMP, GIF (статичные), WebP
    
    Требования к видео:
    
     * максимум 1 видео для одного товара (номенклатуры)
     * максимальный размер — 50 Мб
     * форматы — MOV, MP4
    
    <div class="description_limit">
     Максимум 100 запросов в минуту для всех методов категории <a href="/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token">Контент</a> на один аккаунт продавца
    </div>
    
    *
    * @param \Placestart\WildberriesApi\Model\ContentV3MediaFilePostBody $requestBody 
    * @param array $headerParameters {
    *     @var string $X-Nm-Id Артикул WB
    *     @var int $X-Photo-Number Номер медиафайла на загрузку, начинается с `1`. При загрузке видео всегда указывайте `1`.
    
    Чтобы добавить изображение к уже загруженным, номер медиафайла должен быть больше количества уже загруженных медиафайлов.
    
    * }
    * @param array $accept Accept content header application/json|plain/text
    */
    public function __construct(\Placestart\WildberriesApi\Model\ContentV3MediaFilePostBody $requestBody, array $headerParameters = [], array $accept = [])
    {
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
        $this->accept = $accept;
    }
    use \Placestart\WildberriesApi\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/content/v3/media/file';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Placestart\WildberriesApi\Model\ContentV3MediaFilePostBody) {
            $bodyBuilder = new \Http\Message\MultipartStream\MultipartStreamBuilder($streamFactory);
            $formParameters = $serializer->normalize($this->body, 'json');
            foreach ($formParameters as $key => $value) {
                $value = is_int($value) ? (string) $value : $value;
                $bodyBuilder->addResource($key, $value);
            }
            return [['Content-Type' => ['multipart/form-data; boundary="' . ($bodyBuilder->getBoundary() . '"')]], $bodyBuilder->build()];
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
    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['X-Nm-Id', 'X-Photo-Number']);
        $optionsResolver->setRequired(['X-Nm-Id', 'X-Photo-Number']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('X-Nm-Id', ['string']);
        $optionsResolver->addAllowedTypes('X-Photo-Number', ['int']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Placestart\WildberriesApi\Exception\PostContentV3MediaFileBadRequestException
     * @throws \Placestart\WildberriesApi\Exception\PostContentV3MediaFileUnauthorizedException
     * @throws \Placestart\WildberriesApi\Exception\PostContentV3MediaFileForbiddenException
     * @throws \Placestart\WildberriesApi\Exception\PostContentV3MediaFileTooManyRequestsException
     *
     * @return null|\Placestart\WildberriesApi\Model\ContentV3MediaFilePostResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Placestart\WildberriesApi\Model\ContentV3MediaFilePostResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\PostContentV3MediaFileBadRequestException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\MediaErrors', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\PostContentV3MediaFileUnauthorizedException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\Response401', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\PostContentV3MediaFileForbiddenException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\MediaErrors', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Placestart\WildberriesApi\Exception\PostContentV3MediaFileTooManyRequestsException($serializer->deserialize($body, 'Placestart\WildberriesApi\Model\Response429', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['HeaderApiKey'];
    }
}