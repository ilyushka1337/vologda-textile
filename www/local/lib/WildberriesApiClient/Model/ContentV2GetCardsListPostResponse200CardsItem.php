<?php

namespace Placestart\WildberriesApi\Model;

class ContentV2GetCardsListPostResponse200CardsItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Артикул WB
     *
     * @var int
     */
    protected $nmID;
    /**
     * ID карточки товара. <br> Артикулы WB из одной карточки товара будут иметь одинаковый imtID
     *
     * @var int
     */
    protected $imtID;
    /**
     * Внутренний технический ID товара
     *
     * @var string
     */
    protected $nmUUID;
    /**
     * ID предмета
     *
     * @var int
     */
    protected $subjectID;
    /**
     * Артикул продавца
     *
     * @var string
     */
    protected $vendorCode;
    /**
     * Название предмета
     *
     * @var string
     */
    protected $subjectName;
    /**
     * Бренд
     *
     * @var string
     */
    protected $brand;
    /**
     * Наименование товара
     *
     * @var string
     */
    protected $title;
    /**
     * Массив фото
     *
     * @var list<ContentV2GetCardsListPostResponse200CardsItemPhotosItem>
     */
    protected $photos;
    /**
     * URL видео
     *
     * @var string
     */
    protected $video;
    /**
     * Габариты упаковки товара, см
     *
     * @var ContentV2GetCardsListPostResponse200CardsItemDimensions
     */
    protected $dimensions;
    /**
     * Характеристики
     *
     * @var list<ContentV2GetCardsListPostResponse200CardsItemCharacteristicsItem>
     */
    protected $characteristics;
    /**
     * Размеры товара
     *
     * @var list<ContentV2GetCardsListPostResponse200CardsItemSizesItem>
     */
    protected $sizes;
    /**
     * Теги
     *
     * @var list<ContentV2GetCardsListPostResponse200CardsItemTagsItem>
     */
    protected $tags;
    /**
     * Дата создания
     *
     * @var string
     */
    protected $createdAt;
    /**
     * Дата изменения
     *
     * @var string
     */
    protected $updatedAt;
    /**
     * Артикул WB
     *
     * @return int
     */
    public function getNmID(): int
    {
        return $this->nmID;
    }
    /**
     * Артикул WB
     *
     * @param int $nmID
     *
     * @return self
     */
    public function setNmID(int $nmID): self
    {
        $this->initialized['nmID'] = true;
        $this->nmID = $nmID;
        return $this;
    }
    /**
     * ID карточки товара. <br> Артикулы WB из одной карточки товара будут иметь одинаковый imtID
     *
     * @return int
     */
    public function getImtID(): int
    {
        return $this->imtID;
    }
    /**
     * ID карточки товара. <br> Артикулы WB из одной карточки товара будут иметь одинаковый imtID
     *
     * @param int $imtID
     *
     * @return self
     */
    public function setImtID(int $imtID): self
    {
        $this->initialized['imtID'] = true;
        $this->imtID = $imtID;
        return $this;
    }
    /**
     * Внутренний технический ID товара
     *
     * @return string
     */
    public function getNmUUID(): string
    {
        return $this->nmUUID;
    }
    /**
     * Внутренний технический ID товара
     *
     * @param string $nmUUID
     *
     * @return self
     */
    public function setNmUUID(string $nmUUID): self
    {
        $this->initialized['nmUUID'] = true;
        $this->nmUUID = $nmUUID;
        return $this;
    }
    /**
     * ID предмета
     *
     * @return int
     */
    public function getSubjectID(): int
    {
        return $this->subjectID;
    }
    /**
     * ID предмета
     *
     * @param int $subjectID
     *
     * @return self
     */
    public function setSubjectID(int $subjectID): self
    {
        $this->initialized['subjectID'] = true;
        $this->subjectID = $subjectID;
        return $this;
    }
    /**
     * Артикул продавца
     *
     * @return string
     */
    public function getVendorCode(): string
    {
        return $this->vendorCode;
    }
    /**
     * Артикул продавца
     *
     * @param string $vendorCode
     *
     * @return self
     */
    public function setVendorCode(string $vendorCode): self
    {
        $this->initialized['vendorCode'] = true;
        $this->vendorCode = $vendorCode;
        return $this;
    }
    /**
     * Название предмета
     *
     * @return string
     */
    public function getSubjectName(): string
    {
        return $this->subjectName;
    }
    /**
     * Название предмета
     *
     * @param string $subjectName
     *
     * @return self
     */
    public function setSubjectName(string $subjectName): self
    {
        $this->initialized['subjectName'] = true;
        $this->subjectName = $subjectName;
        return $this;
    }
    /**
     * Бренд
     *
     * @return string
     */
    public function getBrand(): string
    {
        return $this->brand;
    }
    /**
     * Бренд
     *
     * @param string $brand
     *
     * @return self
     */
    public function setBrand(string $brand): self
    {
        $this->initialized['brand'] = true;
        $this->brand = $brand;
        return $this;
    }
    /**
     * Наименование товара
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
    /**
     * Наименование товара
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * Массив фото
     *
     * @return list<ContentV2GetCardsListPostResponse200CardsItemPhotosItem>
     */
    public function getPhotos(): array
    {
        return $this->photos;
    }
    /**
     * Массив фото
     *
     * @param list<ContentV2GetCardsListPostResponse200CardsItemPhotosItem> $photos
     *
     * @return self
     */
    public function setPhotos(array $photos): self
    {
        $this->initialized['photos'] = true;
        $this->photos = $photos;
        return $this;
    }
    /**
     * URL видео
     *
     * @return string
     */
    public function getVideo(): string
    {
        return $this->video;
    }
    /**
     * URL видео
     *
     * @param string $video
     *
     * @return self
     */
    public function setVideo(string $video): self
    {
        $this->initialized['video'] = true;
        $this->video = $video;
        return $this;
    }
    /**
     * Габариты упаковки товара, см
     *
     * @return ContentV2GetCardsListPostResponse200CardsItemDimensions
     */
    public function getDimensions(): ContentV2GetCardsListPostResponse200CardsItemDimensions
    {
        return $this->dimensions;
    }
    /**
     * Габариты упаковки товара, см
     *
     * @param ContentV2GetCardsListPostResponse200CardsItemDimensions $dimensions
     *
     * @return self
     */
    public function setDimensions(ContentV2GetCardsListPostResponse200CardsItemDimensions $dimensions): self
    {
        $this->initialized['dimensions'] = true;
        $this->dimensions = $dimensions;
        return $this;
    }
    /**
     * Характеристики
     *
     * @return list<ContentV2GetCardsListPostResponse200CardsItemCharacteristicsItem>
     */
    public function getCharacteristics(): array
    {
        return $this->characteristics;
    }
    /**
     * Характеристики
     *
     * @param list<ContentV2GetCardsListPostResponse200CardsItemCharacteristicsItem> $characteristics
     *
     * @return self
     */
    public function setCharacteristics(array $characteristics): self
    {
        $this->initialized['characteristics'] = true;
        $this->characteristics = $characteristics;
        return $this;
    }
    /**
     * Размеры товара
     *
     * @return list<ContentV2GetCardsListPostResponse200CardsItemSizesItem>
     */
    public function getSizes(): array
    {
        return $this->sizes;
    }
    /**
     * Размеры товара
     *
     * @param list<ContentV2GetCardsListPostResponse200CardsItemSizesItem> $sizes
     *
     * @return self
     */
    public function setSizes(array $sizes): self
    {
        $this->initialized['sizes'] = true;
        $this->sizes = $sizes;
        return $this;
    }
    /**
     * Теги
     *
     * @return list<ContentV2GetCardsListPostResponse200CardsItemTagsItem>
     */
    public function getTags(): array
    {
        return $this->tags;
    }
    /**
     * Теги
     *
     * @param list<ContentV2GetCardsListPostResponse200CardsItemTagsItem> $tags
     *
     * @return self
     */
    public function setTags(array $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;
        return $this;
    }
    /**
     * Дата создания
     *
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }
    /**
     * Дата создания
     *
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Дата изменения
     *
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }
    /**
     * Дата изменения
     *
     * @param string $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(string $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
}