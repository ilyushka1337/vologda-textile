<?php

namespace Placestart\WildberriesApi;

class Client extends \Placestart\WildberriesApi\Runtime\Client\Client
{
    /**
    * Возвращает список всех родительских категорий товаров
    
    <div class="description_limit">
     Максимум 100 запросов в минуту для всех методов категории <a href="/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token">Контент</a> на один аккаунт продавца
    </div>
    
    *
    * @param array $queryParameters {
    *     @var string $locale Параметр выбора языка (`ru`, `en`, `zh`) значений поля name. Не используется в песочнице
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Placestart\WildberriesApi\Exception\GetContentV2ObjectParentAllBadRequestException
    * @throws \Placestart\WildberriesApi\Exception\GetContentV2ObjectParentAllUnauthorizedException
    * @throws \Placestart\WildberriesApi\Exception\GetContentV2ObjectParentAllForbiddenException
    * @throws \Placestart\WildberriesApi\Exception\GetContentV2ObjectParentAllTooManyRequestsException
    *
    * @return null|\Placestart\WildberriesApi\Model\ContentV2ObjectParentAllGetResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function getContentV2ObjectParentAll(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Placestart\WildberriesApi\Endpoint\GetContentV2ObjectParentAll($queryParameters), $fetch);
    }
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
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Placestart\WildberriesApi\Exception\GetContentV2ObjectAllUnauthorizedException
    * @throws \Placestart\WildberriesApi\Exception\GetContentV2ObjectAllTooManyRequestsException
    *
    * @return null|\Placestart\WildberriesApi\Model\ContentV2ObjectAllGetResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function getContentV2ObjectAll(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Placestart\WildberriesApi\Endpoint\GetContentV2ObjectAll($queryParameters), $fetch);
    }
    /**
    * Возвращает список характеристик предмета по его ID
    
    <div class="description_limit">
     Максимум 100 запросов в минуту для всех методов категории <a href="/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token">Контент</a> на один аккаунт продавца
    </div>
    
    *
    * @param int $subjectId ID предмета
    * @param array $queryParameters {
    *     @var string $locale Параметр выбора языка (`ru`, `en`, `zh`) значений полей `subjectName`, `name`. Не используется в песочнице
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Placestart\WildberriesApi\Exception\GetContentV2ObjectCharcBySubjectIdBadRequestException
    * @throws \Placestart\WildberriesApi\Exception\GetContentV2ObjectCharcBySubjectIdUnauthorizedException
    * @throws \Placestart\WildberriesApi\Exception\GetContentV2ObjectCharcBySubjectIdForbiddenException
    * @throws \Placestart\WildberriesApi\Exception\GetContentV2ObjectCharcBySubjectIdTooManyRequestsException
    *
    * @return null|\Placestart\WildberriesApi\Model\ContentV2ObjectCharcsSubjectIdGetResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function getContentV2ObjectCharcBySubjectId(int $subjectId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Placestart\WildberriesApi\Endpoint\GetContentV2ObjectCharcBySubjectId($subjectId, $queryParameters), $fetch);
    }
    /**
    * Возвращает значения характеристики `Цвет`
    
    <div class="description_limit">
     Максимум 100 запросов в минуту для всех методов категории <a href="/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token">Контент</a> на один аккаунт продавца
    </div>
    
    *
    * @param array $queryParameters {
    *     @var string $locale Параметр выбора языка (`ru`, `en`, `zh`) значений полей `subjectName`, `name`. Не используется в песочнице
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Placestart\WildberriesApi\Exception\GetContentV2DirectoryColorBadRequestException
    * @throws \Placestart\WildberriesApi\Exception\GetContentV2DirectoryColorUnauthorizedException
    * @throws \Placestart\WildberriesApi\Exception\GetContentV2DirectoryColorForbiddenException
    * @throws \Placestart\WildberriesApi\Exception\GetContentV2DirectoryColorTooManyRequestsException
    *
    * @return null|\Placestart\WildberriesApi\Model\ContentV2DirectoryColorsGetResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function getContentV2DirectoryColor(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Placestart\WildberriesApi\Endpoint\GetContentV2DirectoryColor($queryParameters), $fetch);
    }
    /**
    * Возвращает значения характеристики `Пол`
    
    <div class="description_limit">
     Максимум 100 запросов в минуту для всех методов категории <a href="/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token">Контент</a> на один аккаунт продавца
    </div>
    
    *
    * @param array $queryParameters {
    *     @var string $locale Параметр выбора языка (`ru`, `en`, `zh`) значений полей `subjectName`, `name`. Не используется в песочнице
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Placestart\WildberriesApi\Exception\GetContentV2DirectoryKindBadRequestException
    * @throws \Placestart\WildberriesApi\Exception\GetContentV2DirectoryKindUnauthorizedException
    * @throws \Placestart\WildberriesApi\Exception\GetContentV2DirectoryKindForbiddenException
    * @throws \Placestart\WildberriesApi\Exception\GetContentV2DirectoryKindTooManyRequestsException
    *
    * @return null|\Placestart\WildberriesApi\Model\ContentV2DirectoryKindsGetResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function getContentV2DirectoryKind(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Placestart\WildberriesApi\Endpoint\GetContentV2DirectoryKind($queryParameters), $fetch);
    }
    /**
    * Возвращает значения характеристики `Страна производства`
    
    <div class="description_limit">
     Максимум 100 запросов в минуту для всех методов категории <a href="/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token">Контент</a> на один аккаунт продавца
    </div>
    
    *
    * @param array $queryParameters {
    *     @var string $locale Параметр выбора языка (`ru`, `en`, `zh`) значений полей `subjectName`, `name`. Не используется в песочнице
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Placestart\WildberriesApi\Exception\GetContentV2DirectoryCountryBadRequestException
    * @throws \Placestart\WildberriesApi\Exception\GetContentV2DirectoryCountryUnauthorizedException
    * @throws \Placestart\WildberriesApi\Exception\GetContentV2DirectoryCountryForbiddenException
    * @throws \Placestart\WildberriesApi\Exception\GetContentV2DirectoryCountryTooManyRequestsException
    *
    * @return null|\Placestart\WildberriesApi\Model\ContentV2DirectoryCountriesGetResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function getContentV2DirectoryCountry(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Placestart\WildberriesApi\Endpoint\GetContentV2DirectoryCountry($queryParameters), $fetch);
    }
    /**
    * Возвращает значения характеристики `Сезон`
    
    <div class="description_limit">
     Максимум 100 запросов в минуту для всех методов категории <a href="/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token">Контент</a> на один аккаунт продавца
    </div>
    
    *
    * @param array $queryParameters {
    *     @var string $locale Параметр выбора языка (`ru`, `en`, `zh`) значений полей `subjectName`, `name`. Не используется в песочнице
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Placestart\WildberriesApi\Exception\GetContentV2DirectorySeasonBadRequestException
    * @throws \Placestart\WildberriesApi\Exception\GetContentV2DirectorySeasonUnauthorizedException
    * @throws \Placestart\WildberriesApi\Exception\GetContentV2DirectorySeasonForbiddenException
    * @throws \Placestart\WildberriesApi\Exception\GetContentV2DirectorySeasonTooManyRequestsException
    *
    * @return null|\Placestart\WildberriesApi\Model\ContentV2DirectorySeasonsGetResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function getContentV2DirectorySeason(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Placestart\WildberriesApi\Endpoint\GetContentV2DirectorySeason($queryParameters), $fetch);
    }
    /**
    * Возвращает список ТНВЭД-кодов по ТНВЭД-коду и ID предмета
    
    <div class="description_limit">
     Максимум 100 запросов в минуту для всех методов категории <a href="/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token">Контент</a> на один аккаунт продавца
    </div>
    
    *
    * @param array $queryParameters {
    *     @var int $subjectID ID предмета
    *     @var int $search Поиск по ТНВЭД-коду. Работает только в паре с subjectID
    *     @var string $locale Язык (`ru`, `en`, `zh`) для значений полей `subjectName`, `name`. Не используется в песочнице
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Placestart\WildberriesApi\Exception\GetContentV2DirectoryTnvedBadRequestException
    * @throws \Placestart\WildberriesApi\Exception\GetContentV2DirectoryTnvedUnauthorizedException
    * @throws \Placestart\WildberriesApi\Exception\GetContentV2DirectoryTnvedForbiddenException
    * @throws \Placestart\WildberriesApi\Exception\GetContentV2DirectoryTnvedTooManyRequestsException
    *
    * @return null|\Placestart\WildberriesApi\Model\ContentV2DirectoryTnvedGetResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function getContentV2DirectoryTnved(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Placestart\WildberriesApi\Endpoint\GetContentV2DirectoryTnved($queryParameters), $fetch);
    }
    /**
    * Возвращает значения характеристики `Ставка НДС`
    
    <div class="description_limit">
     Максимум 100 запросов в минуту для всех методов категории <a href="/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token">Контент</a> на один аккаунт продавца
    </div>
    
    *
    * @param array $queryParameters {
    *     @var string $locale Язык значения элементов `data` (`ru`, `en`, `zh`). Не используется в песочнице
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Placestart\WildberriesApi\Exception\GetContentV2DirectoryVatBadRequestException
    * @throws \Placestart\WildberriesApi\Exception\GetContentV2DirectoryVatUnauthorizedException
    * @throws \Placestart\WildberriesApi\Exception\GetContentV2DirectoryVatForbiddenException
    * @throws \Placestart\WildberriesApi\Exception\GetContentV2DirectoryVatTooManyRequestsException
    *
    * @return null|\Placestart\WildberriesApi\Model\ContentV2DirectoryVatGetResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function getContentV2DirectoryVat(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Placestart\WildberriesApi\Endpoint\GetContentV2DirectoryVat($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Placestart\WildberriesApi\Exception\GetContentV2TagUnauthorizedException
     * @throws \Placestart\WildberriesApi\Exception\GetContentV2TagForbiddenException
     * @throws \Placestart\WildberriesApi\Exception\GetContentV2TagTooManyRequestsException
     *
     * @return null|\Placestart\WildberriesApi\Model\ContentV2TagsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getContentV2Tag(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Placestart\WildberriesApi\Endpoint\GetContentV2Tag(), $fetch);
    }
    /**
    * Создает один тег.
    Можно создать максимум 15 тегов для одного продавца.
    Максимальная длина тега 15 символов
    <div class="description_limit">
     Максимум 100 запросов в минуту для всех методов категории <a href="/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token">Контент</a> на один аккаунт продавца
    </div>
    
    *
    * @param \Placestart\WildberriesApi\Model\ContentV2TagPostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Placestart\WildberriesApi\Exception\PostContentV2TagBadRequestException
    * @throws \Placestart\WildberriesApi\Exception\PostContentV2TagUnauthorizedException
    * @throws \Placestart\WildberriesApi\Exception\PostContentV2TagForbiddenException
    * @throws \Placestart\WildberriesApi\Exception\PostContentV2TagTooManyRequestsException
    *
    * @return null|\Placestart\WildberriesApi\Model\ResponseContentError6|\Psr\Http\Message\ResponseInterface
    */
    public function postContentV2Tag(\Placestart\WildberriesApi\Model\ContentV2TagPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Placestart\WildberriesApi\Endpoint\PostContentV2Tag($requestBody), $fetch);
    }
    /**
    * Удаляет тег
    
    <div class="description_limit">
     Максимум 100 запросов в минуту для всех методов категории <a href="/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token">Контент</a> на один аккаунт продавца
    </div>
    
    *
    * @param int $id Числовой ID тега
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Placestart\WildberriesApi\Exception\DeleteContentV2TagByIdBadRequestException
    * @throws \Placestart\WildberriesApi\Exception\DeleteContentV2TagByIdUnauthorizedException
    * @throws \Placestart\WildberriesApi\Exception\DeleteContentV2TagByIdForbiddenException
    * @throws \Placestart\WildberriesApi\Exception\DeleteContentV2TagByIdTooManyRequestsException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function deleteContentV2TagById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Placestart\WildberriesApi\Endpoint\DeleteContentV2TagById($id), $fetch);
    }
    /**
    * Меняет данные тега: имя и цвет
    
    <div class="description_limit">
     Максимум 100 запросов в минуту для всех методов категории <a href="/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token">Контент</a> на один аккаунт продавца
    </div>
    
    *
    * @param int $id Числовой ID тега
    * @param \Placestart\WildberriesApi\Model\ContentV2TagIdPatchBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Placestart\WildberriesApi\Exception\PatchContentV2TagByIdBadRequestException
    * @throws \Placestart\WildberriesApi\Exception\PatchContentV2TagByIdUnauthorizedException
    * @throws \Placestart\WildberriesApi\Exception\PatchContentV2TagByIdForbiddenException
    * @throws \Placestart\WildberriesApi\Exception\PatchContentV2TagByIdTooManyRequestsException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function patchContentV2TagById(int $id, \Placestart\WildberriesApi\Model\ContentV2TagIdPatchBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Placestart\WildberriesApi\Endpoint\PatchContentV2TagById($id, $requestBody), $fetch);
    }
    /**
    * Добавляет или снимает теги в карточке товара.
    При снятии тега с карточки товара сам тег продавца не удаляется.
    К карточке можно добавить максимум 15 тегов
    <div class="description_limit">
     Максимум 100 запросов в минуту для всех методов категории <a href="/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token">Контент</a> на один аккаунт продавца
    </div>
    
    *
    * @param \Placestart\WildberriesApi\Model\ContentV2TagNomenclatureLinkPostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Placestart\WildberriesApi\Exception\PostContentV2TagNomenclatureLinkBadRequestException
    * @throws \Placestart\WildberriesApi\Exception\PostContentV2TagNomenclatureLinkUnauthorizedException
    * @throws \Placestart\WildberriesApi\Exception\PostContentV2TagNomenclatureLinkForbiddenException
    * @throws \Placestart\WildberriesApi\Exception\PostContentV2TagNomenclatureLinkTooManyRequestsException
    *
    * @return null|\Placestart\WildberriesApi\Model\ResponseContentError6|\Psr\Http\Message\ResponseInterface
    */
    public function postContentV2TagNomenclatureLink(\Placestart\WildberriesApi\Model\ContentV2TagNomenclatureLinkPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Placestart\WildberriesApi\Endpoint\PostContentV2TagNomenclatureLink($requestBody), $fetch);
    }
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
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|plain/text
    * @throws \Placestart\WildberriesApi\Exception\PostContentV2GetCardsListBadRequestException
    * @throws \Placestart\WildberriesApi\Exception\PostContentV2GetCardsListUnauthorizedException
    * @throws \Placestart\WildberriesApi\Exception\PostContentV2GetCardsListForbiddenException
    * @throws \Placestart\WildberriesApi\Exception\PostContentV2GetCardsListTooManyRequestsException
    *
    * @return null|\Placestart\WildberriesApi\Model\ContentV2GetCardsListPostResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function postContentV2GetCardsList(\Placestart\WildberriesApi\Model\ContentV2GetCardsListPostBody $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Placestart\WildberriesApi\Endpoint\PostContentV2GetCardsList($requestBody, $queryParameters, $accept), $fetch);
    }
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
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Placestart\WildberriesApi\Exception\GetContentV2CardsErrorListBadRequestException
    * @throws \Placestart\WildberriesApi\Exception\GetContentV2CardsErrorListUnauthorizedException
    * @throws \Placestart\WildberriesApi\Exception\GetContentV2CardsErrorListForbiddenException
    * @throws \Placestart\WildberriesApi\Exception\GetContentV2CardsErrorListTooManyRequestsException
    *
    * @return null|\Placestart\WildberriesApi\Model\ContentV2CardsErrorListGetResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function getContentV2CardsErrorList(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Placestart\WildberriesApi\Endpoint\GetContentV2CardsErrorList($queryParameters), $fetch);
    }
    /**
    * Переносит номенклатуру в корзину. При этом карточка товара не удаляется.
    <div class="description_important">
     При переносе номенклатуры в корзину данная номенклатура выходит из карточки товара, то есть ей присваивается новый <code>imtID</code>.
    </div>
    Карточка товара удаляется автоматически, если лежит в корзине больше 30 дней. Очистка корзины происходит каждую ночь по московскому времени
    <div class="description_limit">
     Максимум 100 запросов в минуту для всех методов категории <a href="/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token">Контент</a> на один аккаунт продавца
    </div>
    
    *
    * @param \Placestart\WildberriesApi\Model\ContentV2CardsDeleteTrashPostBodyItem[] $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Placestart\WildberriesApi\Exception\PostContentV2CardsDeleteTrashBadRequestException
    * @throws \Placestart\WildberriesApi\Exception\PostContentV2CardsDeleteTrashUnauthorizedException
    * @throws \Placestart\WildberriesApi\Exception\PostContentV2CardsDeleteTrashForbiddenException
    * @throws \Placestart\WildberriesApi\Exception\PostContentV2CardsDeleteTrashTooManyRequestsException
    *
    * @return null|\Placestart\WildberriesApi\Model\ContentV2CardsDeleteTrashPostResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function postContentV2CardsDeleteTrash(array $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Placestart\WildberriesApi\Endpoint\PostContentV2CardsDeleteTrash($requestBody), $fetch);
    }
    /**
    * Восстанавливает номенклатуру из корзины
    <div class="description_important">
     Номенклатура не возвращается к изначальной карточке товара при восстановлении. Номенклатура сохраняет тот же <code>imtID</code>, что был присвоен ей при перемещении в корзину.
    </div>
    <div class="description_limit">
     Максимум 100 запросов в минуту для всех методов категории <a href="/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token">Контент</a> на один аккаунт продавца
    </div>
    
    *
    * @param \Placestart\WildberriesApi\Model\ContentV2CardsRecoverPostBodyItem[] $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Placestart\WildberriesApi\Exception\PostContentV2CardsRecoverBadRequestException
    * @throws \Placestart\WildberriesApi\Exception\PostContentV2CardsRecoverUnauthorizedException
    * @throws \Placestart\WildberriesApi\Exception\PostContentV2CardsRecoverForbiddenException
    * @throws \Placestart\WildberriesApi\Exception\PostContentV2CardsRecoverTooManyRequestsException
    *
    * @return null|\Placestart\WildberriesApi\Model\ContentV2CardsRecoverPostResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function postContentV2CardsRecover(array $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Placestart\WildberriesApi\Endpoint\PostContentV2CardsRecover($requestBody), $fetch);
    }
    /**
    * <div class="description_auth">  
     Метод доступен по <a href="/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token">токену</a> с категорией <strong>Продвижение</strong>
    </div>
    
    Возвращает список номенклатур в корзине. 
    
    Чтобы получить **больше 100** номенклатур, необходимо воспользоваться пагинацией.
    
     <ol>
       <li>Сделать первый запрос: <br>
         <pre style="background-color: rgb(38 50 56 / 5%); color: #e53935">
           {
             "settings": {                      
               "cursor": {
                 "limit": 100
               }
             }
           }</pre>                               
       </li>
       <li>Пройти в конец полученного списка номенклатур, скопировать из <code>cursor</code> две строки:
         <ul>
           <li><code>"trashedAt": "***"</code></li>
           <li><code>"nmID": ***</code></li>
         </ul>
       <li>Вставить скопированные строки в <code>cursor</code> запроса, повторить запрос. </li>
       <li>Повторять пункты <b>2</b> и <b>3</b>, пока <code>total</code> в ответе не станет меньше чем <code>limit</code> в запросе. Это будет означать, что вы получили все карточки.
     </ol>
    
     <div class="description_limit">
       Максимум 100 запросов в минуту для всех методов категории <a href="/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token">Контент</a> на один аккаунт продавца
     </div>
    
    *
    * @param \Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostBody $requestBody 
    * @param array $queryParameters {
    *     @var string $locale Язык полей ответа `name`, `value` и `object`: `ru`, `en`, `zh`.
    
    Не используется в песочнице
    
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|plain/text
    * @throws \Placestart\WildberriesApi\Exception\PostContentV2GetCardsTrashBadRequestException
    * @throws \Placestart\WildberriesApi\Exception\PostContentV2GetCardsTrashUnauthorizedException
    * @throws \Placestart\WildberriesApi\Exception\PostContentV2GetCardsTrashForbiddenException
    * @throws \Placestart\WildberriesApi\Exception\PostContentV2GetCardsTrashTooManyRequestsException
    *
    * @return null|\Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function postContentV2GetCardsTrash(\Placestart\WildberriesApi\Model\ContentV2GetCardsTrashPostBody $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Placestart\WildberriesApi\Endpoint\PostContentV2GetCardsTrash($requestBody, $queryParameters, $accept), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Placestart\WildberriesApi\Exception\GetContentV2CardsLimitUnauthorizedException
     * @throws \Placestart\WildberriesApi\Exception\GetContentV2CardsLimitForbiddenException
     * @throws \Placestart\WildberriesApi\Exception\GetContentV2CardsLimitTooManyRequestsException
     *
     * @return null|\Placestart\WildberriesApi\Model\ContentV2CardsLimitsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getContentV2CardsLimit(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Placestart\WildberriesApi\Endpoint\GetContentV2CardsLimit(), $fetch);
    }
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
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Placestart\WildberriesApi\Exception\PostContentV2CardsUploadBadRequestException
    * @throws \Placestart\WildberriesApi\Exception\PostContentV2CardsUploadUnauthorizedException
    * @throws \Placestart\WildberriesApi\Exception\PostContentV2CardsUploadRequestEntityTooLargeException
    * @throws \Placestart\WildberriesApi\Exception\PostContentV2CardsUploadTooManyRequestsException
    *
    * @return null|\Placestart\WildberriesApi\Model\ResponseCardCreate|\Psr\Http\Message\ResponseInterface
    */
    public function postContentV2CardsUpload(?array $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Placestart\WildberriesApi\Endpoint\PostContentV2CardsUpload($requestBody), $fetch);
    }
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
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Placestart\WildberriesApi\Exception\PostContentV2CardsUpdateBadRequestException
    * @throws \Placestart\WildberriesApi\Exception\PostContentV2CardsUpdateUnauthorizedException
    * @throws \Placestart\WildberriesApi\Exception\PostContentV2CardsUpdateForbiddenException
    * @throws \Placestart\WildberriesApi\Exception\PostContentV2CardsUpdateRequestEntityTooLargeException
    * @throws \Placestart\WildberriesApi\Exception\PostContentV2CardsUpdateTooManyRequestsException
    *
    * @return null|\Placestart\WildberriesApi\Model\ResponseCardCreate|\Psr\Http\Message\ResponseInterface
    */
    public function postContentV2CardsUpdate(?array $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Placestart\WildberriesApi\Endpoint\PostContentV2CardsUpdate($requestBody), $fetch);
    }
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
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Placestart\WildberriesApi\Exception\PostContentV2CardsUploadAddBadRequestException
    * @throws \Placestart\WildberriesApi\Exception\PostContentV2CardsUploadAddUnauthorizedException
    * @throws \Placestart\WildberriesApi\Exception\PostContentV2CardsUploadAddRequestEntityTooLargeException
    * @throws \Placestart\WildberriesApi\Exception\PostContentV2CardsUploadAddTooManyRequestsException
    *
    * @return null|\Placestart\WildberriesApi\Model\ResponseCardCreate|\Psr\Http\Message\ResponseInterface
    */
    public function postContentV2CardsUploadAdd(?\Placestart\WildberriesApi\Model\ContentV2CardsUploadAddPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Placestart\WildberriesApi\Endpoint\PostContentV2CardsUploadAdd($requestBody), $fetch);
    }
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
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Placestart\WildberriesApi\Exception\PostContentV2CardsMoveNmBadRequestException
    * @throws \Placestart\WildberriesApi\Exception\PostContentV2CardsMoveNmUnauthorizedException
    * @throws \Placestart\WildberriesApi\Exception\PostContentV2CardsMoveNmForbiddenException
    * @throws \Placestart\WildberriesApi\Exception\PostContentV2CardsMoveNmRequestEntityTooLargeException
    * @throws \Placestart\WildberriesApi\Exception\PostContentV2CardsMoveNmTooManyRequestsException
    *
    * @return null|\Placestart\WildberriesApi\Model\ResponseCardCreate|\Psr\Http\Message\ResponseInterface
    */
    public function postContentV2CardsMoveNm($requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Placestart\WildberriesApi\Endpoint\PostContentV2CardsMoveNm($requestBody), $fetch);
    }
    /**
    * Генерирует массив уникальных баркодов для создания размера номенклатуры в карточке товара
    
    <div class="description_limit">
     Максимум 100 запросов в минуту для всех методов категории <a href="/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token">Контент</a> на один аккаунт продавца
    </div>
    
    *
    * @param \Placestart\WildberriesApi\Model\ContentV2BarcodesPostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Placestart\WildberriesApi\Exception\PostContentV2BarcodeUnauthorizedException
    * @throws \Placestart\WildberriesApi\Exception\PostContentV2BarcodeForbiddenException
    * @throws \Placestart\WildberriesApi\Exception\PostContentV2BarcodeTooManyRequestsException
    *
    * @return null|\Placestart\WildberriesApi\Model\ContentV2BarcodesPostResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function postContentV2Barcode(\Placestart\WildberriesApi\Model\ContentV2BarcodesPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Placestart\WildberriesApi\Endpoint\PostContentV2Barcode($requestBody), $fetch);
    }
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
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|plain/text
    * @throws \Placestart\WildberriesApi\Exception\PostContentV3MediaFileBadRequestException
    * @throws \Placestart\WildberriesApi\Exception\PostContentV3MediaFileUnauthorizedException
    * @throws \Placestart\WildberriesApi\Exception\PostContentV3MediaFileForbiddenException
    * @throws \Placestart\WildberriesApi\Exception\PostContentV3MediaFileTooManyRequestsException
    *
    * @return null|\Placestart\WildberriesApi\Model\ContentV3MediaFilePostResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function postContentV3MediaFile(\Placestart\WildberriesApi\Model\ContentV3MediaFilePostBody $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Placestart\WildberriesApi\Endpoint\PostContentV3MediaFile($requestBody, $headerParameters, $accept), $fetch);
    }
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
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Placestart\WildberriesApi\Exception\PostContentV3MediaSaveBadRequestException
    * @throws \Placestart\WildberriesApi\Exception\PostContentV3MediaSaveUnauthorizedException
    * @throws \Placestart\WildberriesApi\Exception\PostContentV3MediaSaveForbiddenException
    * @throws \Placestart\WildberriesApi\Exception\PostContentV3MediaSaveConflictException
    * @throws \Placestart\WildberriesApi\Exception\PostContentV3MediaSaveUnprocessableEntityException
    * @throws \Placestart\WildberriesApi\Exception\PostContentV3MediaSaveTooManyRequestsException
    *
    * @return null|\Placestart\WildberriesApi\Model\ContentV3MediaSavePostResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function postContentV3MediaSave(\Placestart\WildberriesApi\Model\ContentV3MediaSavePostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Placestart\WildberriesApi\Endpoint\PostContentV3MediaSave($requestBody), $fetch);
    }
    /**
    * Устанавливает цены и скидки для товаров
    <div class="description_limit">
     Максимум 10 запросов за 6 секунд для всех методов категории <a href="/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token">Цены и скидки</a> на один аккаунт продавца
    </div>
    
    *
    * @param \Placestart\WildberriesApi\Model\ApiV2UploadTaskPostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Placestart\WildberriesApi\Exception\PostApiV2UploadTaskBadRequestException
    * @throws \Placestart\WildberriesApi\Exception\PostApiV2UploadTaskUnauthorizedException
    * @throws \Placestart\WildberriesApi\Exception\PostApiV2UploadTaskUnprocessableEntityException
    * @throws \Placestart\WildberriesApi\Exception\PostApiV2UploadTaskTooManyRequestsException
    *
    * @return null|\Placestart\WildberriesApi\Model\TaskCreated|\Placestart\WildberriesApi\Model\TaskAlreadyExistsError|\Psr\Http\Message\ResponseInterface
    */
    public function postApiV2UploadTask(\Placestart\WildberriesApi\Model\ApiV2UploadTaskPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Placestart\WildberriesApi\Endpoint\PostApiV2UploadTask($requestBody), $fetch);
    }
    /**
    * Устанавливает цены отдельно для размеров. 
    Работает только для товаров из категорий, где можно устанавливать цены отдельно для разных размеров. Для [таких товаров](/openapi/work-with-products#tag/Ceny-i-skidki/paths/~1api~1v2~1list~1goods~1size~1nm/get) `editableSizePrice: true`
    <div class="description_limit">
     Максимум 10 запросов за 6 секунд для всех методов категории <a href="/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token">Цены и скидки</a> на один аккаунт продавца
    </div>
    
    *
    * @param \Placestart\WildberriesApi\Model\ApiV2UploadTaskSizePostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Placestart\WildberriesApi\Exception\PostApiV2UploadTaskSizeBadRequestException
    * @throws \Placestart\WildberriesApi\Exception\PostApiV2UploadTaskSizeUnauthorizedException
    * @throws \Placestart\WildberriesApi\Exception\PostApiV2UploadTaskSizeUnprocessableEntityException
    * @throws \Placestart\WildberriesApi\Exception\PostApiV2UploadTaskSizeTooManyRequestsException
    *
    * @return null|\Placestart\WildberriesApi\Model\TaskCreated|\Placestart\WildberriesApi\Model\TaskAlreadyExistsError|\Psr\Http\Message\ResponseInterface
    */
    public function postApiV2UploadTaskSize(\Placestart\WildberriesApi\Model\ApiV2UploadTaskSizePostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Placestart\WildberriesApi\Endpoint\PostApiV2UploadTaskSize($requestBody), $fetch);
    }
    /**
    * Устанавливает скидки в рамках подписки WB Клуб
    <div class="description_limit">
     Максимум 10 запросов за 6 секунд для всех методов категории <a href="/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token">Цены и скидки</a> на один аккаунт продавца
    </div>
    
    *
    * @param \Placestart\WildberriesApi\Model\ApiV2UploadTaskClubDiscountPostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Placestart\WildberriesApi\Exception\PostApiV2UploadTaskClubDiscountBadRequestException
    * @throws \Placestart\WildberriesApi\Exception\PostApiV2UploadTaskClubDiscountUnauthorizedException
    * @throws \Placestart\WildberriesApi\Exception\PostApiV2UploadTaskClubDiscountUnprocessableEntityException
    * @throws \Placestart\WildberriesApi\Exception\PostApiV2UploadTaskClubDiscountTooManyRequestsException
    *
    * @return null|\Placestart\WildberriesApi\Model\TaskCreated|\Placestart\WildberriesApi\Model\TaskAlreadyExistsError|\Psr\Http\Message\ResponseInterface
    */
    public function postApiV2UploadTaskClubDiscount(\Placestart\WildberriesApi\Model\ApiV2UploadTaskClubDiscountPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Placestart\WildberriesApi\Endpoint\PostApiV2UploadTaskClubDiscount($requestBody), $fetch);
    }
    /**
    * Возвращает информацию про обработанную загрузку
    
    <div class="description_limit">
     Максимум 10 запросов за 6 секунд для всех методов категории <a href="/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token">Цены и скидки</a> на один аккаунт продавца
    </div>
    
    *
    * @param array $queryParameters {
    *     @var int $uploadID ID загрузки
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Placestart\WildberriesApi\Exception\GetApiV2HistoryTaskBadRequestException
    * @throws \Placestart\WildberriesApi\Exception\GetApiV2HistoryTaskUnauthorizedException
    * @throws \Placestart\WildberriesApi\Exception\GetApiV2HistoryTaskTooManyRequestsException
    *
    * @return null|\Placestart\WildberriesApi\Model\ResponseResponseTaskHistory|\Psr\Http\Message\ResponseInterface
    */
    public function getApiV2HistoryTask(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Placestart\WildberriesApi\Endpoint\GetApiV2HistoryTask($queryParameters), $fetch);
    }
    /**
    * Возвращает информацию о товарах в обработанной загрузке, в том числе, об ошибках в них
    
    <div class="description_limit">
     Максимум 10 запросов за 6 секунд для всех методов категории <a href="/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token">Цены и скидки</a> на один аккаунт продавца
    </div>
    
    *
    * @param array $queryParameters {
    *     @var int $limit Сколько элементов вывести на одной странице (пагинация). Максимум 1 000 элементов
    *     @var int $offset После какого элемента выдавать данные
    *     @var int $uploadID ID загрузки
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Placestart\WildberriesApi\Exception\GetApiV2HistoryGoodsTaskBadRequestException
    * @throws \Placestart\WildberriesApi\Exception\GetApiV2HistoryGoodsTaskUnauthorizedException
    * @throws \Placestart\WildberriesApi\Exception\GetApiV2HistoryGoodsTaskTooManyRequestsException
    *
    * @return null|\Placestart\WildberriesApi\Model\ResponseResponseGoodHistories|\Psr\Http\Message\ResponseInterface
    */
    public function getApiV2HistoryGoodsTask(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Placestart\WildberriesApi\Endpoint\GetApiV2HistoryGoodsTask($queryParameters), $fetch);
    }
    /**
    * Возвращает информацию про загрузку в обработке
    
    <div class="description_limit">
     Максимум 10 запросов за 6 секунд для всех методов категории <a href="/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token">Цены и скидки</a> на один аккаунт продавца
    </div>
    
    *
    * @param array $queryParameters {
    *     @var int $uploadID ID загрузки
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Placestart\WildberriesApi\Exception\GetApiV2BufferTaskBadRequestException
    * @throws \Placestart\WildberriesApi\Exception\GetApiV2BufferTaskUnauthorizedException
    * @throws \Placestart\WildberriesApi\Exception\GetApiV2BufferTaskTooManyRequestsException
    *
    * @return null|\Placestart\WildberriesApi\Model\ResponseResponseTaskBuffer|\Psr\Http\Message\ResponseInterface
    */
    public function getApiV2BufferTask(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Placestart\WildberriesApi\Endpoint\GetApiV2BufferTask($queryParameters), $fetch);
    }
    /**
    * Возвращает информацию о товарах из загрузки в обработке, в том числе, об ошибках в них
    
    <div class="description_limit">
     Максимум 10 запросов за 6 секунд для всех методов категории <a href="/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token">Цены и скидки</a> на один аккаунт продавца
    </div>
    
    *
    * @param array $queryParameters {
    *     @var int $limit Сколько элементов вывести на одной странице (пагинация). Максимум 1 000 элементов
    *     @var int $offset После какого элемента выдавать данные
    *     @var int $uploadID ID загрузки
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Placestart\WildberriesApi\Exception\GetApiV2BufferGoodsTaskBadRequestException
    * @throws \Placestart\WildberriesApi\Exception\GetApiV2BufferGoodsTaskUnauthorizedException
    * @throws \Placestart\WildberriesApi\Exception\GetApiV2BufferGoodsTaskTooManyRequestsException
    *
    * @return null|\Placestart\WildberriesApi\Model\ResponseResponseGoodBufferHistories|\Psr\Http\Message\ResponseInterface
    */
    public function getApiV2BufferGoodsTask(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Placestart\WildberriesApi\Endpoint\GetApiV2BufferGoodsTask($queryParameters), $fetch);
    }
    /**
    * Возвращает информацию о товаре по его артикулу. 
    
    Чтобы получить информацию обо всех товарах, оставьте артикул пустым
    
    <div class="description_limit">
     Максимум 10 запросов за 6 секунд для всех методов категории <a href="/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token">Цены и скидки</a> на один аккаунт продавца
    </div>
    
    *
    * @param array $queryParameters {
    *     @var int $limit Сколько элементов вывести на одной странице (пагинация). Максимум 1 000 элементов
    *     @var int $offset После какого элемента выдавать данные
    *     @var int $filterNmID Артикул WB, по которому искать товар
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Placestart\WildberriesApi\Exception\GetApiV2ListGoodsFilterBadRequestException
    * @throws \Placestart\WildberriesApi\Exception\GetApiV2ListGoodsFilterUnauthorizedException
    * @throws \Placestart\WildberriesApi\Exception\GetApiV2ListGoodsFilterTooManyRequestsException
    *
    * @return null|\Placestart\WildberriesApi\Model\ResponseResponseGoodsLists|\Psr\Http\Message\ResponseInterface
    */
    public function getApiV2ListGoodsFilter(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Placestart\WildberriesApi\Endpoint\GetApiV2ListGoodsFilter($queryParameters), $fetch);
    }
    /**
    * Возвращает информацию о всех размерах одного товара. 
    Работает только для товаров из категорий, где можно устанавливать цены отдельно для разных размеров. Для таких товаров `editableSizePrice: true`
    <div class="description_limit">
     Максимум 10 запросов за 6 секунд для всех методов категории <a href="/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token">Цены и скидки</a> на один аккаунт продавца
    </div>
    
    *
    * @param array $queryParameters {
    *     @var int $limit Сколько элементов вывести на одной странице (пагинация). Максимум 1 000 элементов
    *     @var int $offset После какого элемента выдавать данные
    *     @var int $nmID Артикул WB
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Placestart\WildberriesApi\Exception\GetApiV2ListGoodsSizeNmBadRequestException
    * @throws \Placestart\WildberriesApi\Exception\GetApiV2ListGoodsSizeNmUnauthorizedException
    * @throws \Placestart\WildberriesApi\Exception\GetApiV2ListGoodsSizeNmTooManyRequestsException
    *
    * @return null|\Placestart\WildberriesApi\Model\ResponseResponseSizeLists|\Psr\Http\Message\ResponseInterface
    */
    public function getApiV2ListGoodsSizeNm(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Placestart\WildberriesApi\Endpoint\GetApiV2ListGoodsSizeNm($queryParameters), $fetch);
    }
    /**
    * Возвращает информацию о товарах в карантине. <br><br> Если новая цена товара со скидкой будет минимум в 3 раза меньше старой, товар попадёт [в карантин](https://seller.wildberries.ru/discount-and-prices/quarantine) и будет продаваться по старой цене. Ошибка об этом будет в ответах методов [состояний загрузок](/openapi/work-with-products#tag/Ceny-i-skidki/paths/~1api~1v2~1history~1tasks/get). <br><br> Вы можете изменить цену или скидку с помощью API либо вывести товар из карантина [в личном кабинете](https://seller.wildberries.ru/discount-and-prices/quarantine). <br><br> Для товаров с [поразмерной установкой цен](/openapi/work-with-products#tag/Ceny-i-skidki/paths/~1api~1v2~1upload~1task~1size/post) карантин не применяется
    <div class="description_limit">
     Максимум 10 запросов за 6 секунд для всех методов категории <a href="/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token">Цены и скидки</a> на один аккаунт продавца
    </div>
    
    *
    * @param array $queryParameters {
    *     @var int $limit Сколько элементов вывести на одной странице (пагинация). Максимум 1 000 элементов
    *     @var int $offset После какого элемента выдавать данные
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Placestart\WildberriesApi\Exception\GetApiV2QuarantineGoodBadRequestException
    * @throws \Placestart\WildberriesApi\Exception\GetApiV2QuarantineGoodUnauthorizedException
    * @throws \Placestart\WildberriesApi\Exception\GetApiV2QuarantineGoodUnprocessableEntityException
    * @throws \Placestart\WildberriesApi\Exception\GetApiV2QuarantineGoodTooManyRequestsException
    *
    * @return null|\Placestart\WildberriesApi\Model\ResponseResponseQuarantineGoods|\Psr\Http\Message\ResponseInterface
    */
    public function getApiV2QuarantineGood(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Placestart\WildberriesApi\Endpoint\GetApiV2QuarantineGood($queryParameters), $fetch);
    }
    /**
    * Удаляет остатки товаров
    <div class="description_important">
     <strong>Действие необратимо</strong>. Удаленный остаток будет необходимо загрузить повторно для возобновления продаж.
    </div>
    <div class="description_limit">  
     Максимум 300 запросов в минуту для всех методов категории <a href="/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token">Маркетплейс</a> на один аккаунт продавца
    </div>
    
    *
    * @param int $warehouseId ID склада продавца
    * @param \Placestart\WildberriesApi\Model\ApiV3StocksWarehouseIdDeleteBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Placestart\WildberriesApi\Exception\DeleteApiV3StockByWarehouseIdBadRequestException
    * @throws \Placestart\WildberriesApi\Exception\DeleteApiV3StockByWarehouseIdUnauthorizedException
    * @throws \Placestart\WildberriesApi\Exception\DeleteApiV3StockByWarehouseIdForbiddenException
    * @throws \Placestart\WildberriesApi\Exception\DeleteApiV3StockByWarehouseIdNotFoundException
    * @throws \Placestart\WildberriesApi\Exception\DeleteApiV3StockByWarehouseIdTooManyRequestsException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function deleteApiV3StockByWarehouseId(int $warehouseId, \Placestart\WildberriesApi\Model\ApiV3StocksWarehouseIdDeleteBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Placestart\WildberriesApi\Endpoint\DeleteApiV3StockByWarehouseId($warehouseId, $requestBody), $fetch);
    }
    /**
    * Возвращает остатки товаров
    
    <div class="description_limit">  
     Максимум 300 запросов в минуту для всех методов категории <a href="/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token">Маркетплейс</a> на один аккаунт продавца
    </div>
    
    *
    * @param int $warehouseId ID склада продавца
    * @param \Placestart\WildberriesApi\Model\ApiV3StocksWarehouseIdPostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Placestart\WildberriesApi\Exception\PostApiV3StockByWarehouseIdBadRequestException
    * @throws \Placestart\WildberriesApi\Exception\PostApiV3StockByWarehouseIdUnauthorizedException
    * @throws \Placestart\WildberriesApi\Exception\PostApiV3StockByWarehouseIdForbiddenException
    * @throws \Placestart\WildberriesApi\Exception\PostApiV3StockByWarehouseIdNotFoundException
    * @throws \Placestart\WildberriesApi\Exception\PostApiV3StockByWarehouseIdTooManyRequestsException
    *
    * @return null|\Placestart\WildberriesApi\Model\ApiV3StocksWarehouseIdPostResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function postApiV3StockByWarehouseId(int $warehouseId, \Placestart\WildberriesApi\Model\ApiV3StocksWarehouseIdPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Placestart\WildberriesApi\Endpoint\PostApiV3StockByWarehouseId($warehouseId, $requestBody), $fetch);
    }
    /**
    * Обновляет остатки товаров
    <div class="description_important">
     Имена параметров запроса не валидируются. При отправке некорректных имен вы получите успешный ответ (<code>204</code>), но остатки не обновятся.
    </div>
    <div class="description_limit">  
     Максимум 300 запросов в минуту для всех методов категории <a href="/openapi/api-information#tag/Avtorizaciya/Kak-sozdat-token">Маркетплейс</a> на один аккаунт продавца
    </div>
    
    *
    * @param int $warehouseId ID склада продавца
    * @param null|\Placestart\WildberriesApi\Model\ApiV3StocksWarehouseIdPutBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Placestart\WildberriesApi\Exception\PutApiV3StockByWarehouseIdBadRequestException
    * @throws \Placestart\WildberriesApi\Exception\PutApiV3StockByWarehouseIdUnauthorizedException
    * @throws \Placestart\WildberriesApi\Exception\PutApiV3StockByWarehouseIdForbiddenException
    * @throws \Placestart\WildberriesApi\Exception\PutApiV3StockByWarehouseIdNotFoundException
    * @throws \Placestart\WildberriesApi\Exception\PutApiV3StockByWarehouseIdNotAcceptableException
    * @throws \Placestart\WildberriesApi\Exception\PutApiV3StockByWarehouseIdConflictException
    * @throws \Placestart\WildberriesApi\Exception\PutApiV3StockByWarehouseIdTooManyRequestsException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function putApiV3StockByWarehouseId(int $warehouseId, ?\Placestart\WildberriesApi\Model\ApiV3StocksWarehouseIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Placestart\WildberriesApi\Endpoint\PutApiV3StockByWarehouseId($warehouseId, $requestBody), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Placestart\WildberriesApi\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}