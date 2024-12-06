<?php

namespace Placestart\WildberriesApi\Model;

class ContentV2GetCardsTrashPostResponse200CardsItem extends \ArrayObject
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
     * Артикул продавца
     *
     * @var string
     */
    protected $vendorCode;
    /**
     * ID предмета
     *
     * @var int
     */
    protected $subjectID;
    /**
     * Название предмета
     *
     * @var string
     */
    protected $subjectName;
    /**
     * Массив фото
     *
     * @var list<ContentV2GetCardsTrashPostResponse200CardsItemPhotosItem>
     */
    protected $photos;
    /**
     * URL видео
     *
     * @var string
     */
    protected $video;
    /**
     * Массив размеров
     *
     * @var list<ContentV2GetCardsTrashPostResponse200CardsItemSizesItem>
     */
    protected $sizes;
    /**
     * 
     *
     * @var ContentV2GetCardsTrashPostResponse200CardsItemDimensions
     */
    protected $dimensions;
    /**
     * Массив характеристик, при наличии
     *
     * @var list<ContentV2GetCardsTrashPostResponse200CardsItemCharacteristicsItem>
     */
    protected $characteristics;
    /**
     * 
     *
     * @var string
     */
    protected $createdAt;
    /**
     * 
     *
     * @var string
     */
    protected $trashedAt;
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
     * Массив фото
     *
     * @return list<ContentV2GetCardsTrashPostResponse200CardsItemPhotosItem>
     */
    public function getPhotos(): array
    {
        return $this->photos;
    }
    /**
     * Массив фото
     *
     * @param list<ContentV2GetCardsTrashPostResponse200CardsItemPhotosItem> $photos
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
     * Массив размеров
     *
     * @return list<ContentV2GetCardsTrashPostResponse200CardsItemSizesItem>
     */
    public function getSizes(): array
    {
        return $this->sizes;
    }
    /**
     * Массив размеров
     *
     * @param list<ContentV2GetCardsTrashPostResponse200CardsItemSizesItem> $sizes
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
     * 
     *
     * @return ContentV2GetCardsTrashPostResponse200CardsItemDimensions
     */
    public function getDimensions(): ContentV2GetCardsTrashPostResponse200CardsItemDimensions
    {
        return $this->dimensions;
    }
    /**
     * 
     *
     * @param ContentV2GetCardsTrashPostResponse200CardsItemDimensions $dimensions
     *
     * @return self
     */
    public function setDimensions(ContentV2GetCardsTrashPostResponse200CardsItemDimensions $dimensions): self
    {
        $this->initialized['dimensions'] = true;
        $this->dimensions = $dimensions;
        return $this;
    }
    /**
     * Массив характеристик, при наличии
     *
     * @return list<ContentV2GetCardsTrashPostResponse200CardsItemCharacteristicsItem>
     */
    public function getCharacteristics(): array
    {
        return $this->characteristics;
    }
    /**
     * Массив характеристик, при наличии
     *
     * @param list<ContentV2GetCardsTrashPostResponse200CardsItemCharacteristicsItem> $characteristics
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
     * 
     *
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }
    /**
     * 
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
     * 
     *
     * @return string
     */
    public function getTrashedAt(): string
    {
        return $this->trashedAt;
    }
    /**
     * 
     *
     * @param string $trashedAt
     *
     * @return self
     */
    public function setTrashedAt(string $trashedAt): self
    {
        $this->initialized['trashedAt'] = true;
        $this->trashedAt = $trashedAt;
        return $this;
    }
}