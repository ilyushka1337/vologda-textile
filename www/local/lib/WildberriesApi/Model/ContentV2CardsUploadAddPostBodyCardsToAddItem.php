<?php

namespace Placestart\WildberriesApi\Model;

class ContentV2CardsUploadAddPostBodyCardsToAddItem extends \ArrayObject
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
     * Бренд
     *
     * @var string
     */
    protected $brand;
    /**
     * Артикул продавца
     *
     * @var string
     */
    protected $vendorCode;
    /**
     * Наименование товара
     *
     * @var string
     */
    protected $title;
    /**
    * Описание товара. Максимальное количество символов зависит от категории товара. Стандарт — 2000, минимум — 1000, максимум — 5000.<br>
    Подробно о правилах описания в **Правилах заполнения карточки товара** в разделе [Инструкции](https://seller.wildberries.ru/help-center/article/A-113#описание) на портале продавцов.
    
    *
    * @var string
    */
    protected $description;
    /**
    * Габариты упаковки товара. Указывать в **сантиметрах** для любого товара. 
    <br> 
    Если не указать структуру dimensions в запросе, то она сгенерируется системой автоматически с нулевыми значениями длины, ширины, высоты
    
    *
    * @var ContentV2CardsUploadAddPostBodyCardsToAddItemDimensions
    */
    protected $dimensions;
    /**
     * Характеристики товара
     *
     * @var list<ContentV2CardsUploadAddPostBodyCardsToAddItemCharacteristicsItem>
     */
    protected $characteristics;
    /**
    * Массив с размерами. <br> 
    Если для размерного товара (обувь, одежда и др.) не указать этот массив, то системой в карточке он будет сгенерирован автоматически с `techSize` = "A" и `wbSize` = "1" и баркодом.
    
    *
    * @var list<ContentV2CardsUploadAddPostBodyCardsToAddItemSizesItem>
    */
    protected $sizes;
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
    * Описание товара. Максимальное количество символов зависит от категории товара. Стандарт — 2000, минимум — 1000, максимум — 5000.<br>
    Подробно о правилах описания в **Правилах заполнения карточки товара** в разделе [Инструкции](https://seller.wildberries.ru/help-center/article/A-113#описание) на портале продавцов.
    
    *
    * @return string
    */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
    * Описание товара. Максимальное количество символов зависит от категории товара. Стандарт — 2000, минимум — 1000, максимум — 5000.<br>
    Подробно о правилах описания в **Правилах заполнения карточки товара** в разделе [Инструкции](https://seller.wildberries.ru/help-center/article/A-113#описание) на портале продавцов.
    
    *
    * @param string $description
    *
    * @return self
    */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
    * Габариты упаковки товара. Указывать в **сантиметрах** для любого товара. 
    <br> 
    Если не указать структуру dimensions в запросе, то она сгенерируется системой автоматически с нулевыми значениями длины, ширины, высоты
    
    *
    * @return ContentV2CardsUploadAddPostBodyCardsToAddItemDimensions
    */
    public function getDimensions(): ContentV2CardsUploadAddPostBodyCardsToAddItemDimensions
    {
        return $this->dimensions;
    }
    /**
    * Габариты упаковки товара. Указывать в **сантиметрах** для любого товара. 
    <br> 
    Если не указать структуру dimensions в запросе, то она сгенерируется системой автоматически с нулевыми значениями длины, ширины, высоты
    
    *
    * @param ContentV2CardsUploadAddPostBodyCardsToAddItemDimensions $dimensions
    *
    * @return self
    */
    public function setDimensions(ContentV2CardsUploadAddPostBodyCardsToAddItemDimensions $dimensions): self
    {
        $this->initialized['dimensions'] = true;
        $this->dimensions = $dimensions;
        return $this;
    }
    /**
     * Характеристики товара
     *
     * @return list<ContentV2CardsUploadAddPostBodyCardsToAddItemCharacteristicsItem>
     */
    public function getCharacteristics(): array
    {
        return $this->characteristics;
    }
    /**
     * Характеристики товара
     *
     * @param list<ContentV2CardsUploadAddPostBodyCardsToAddItemCharacteristicsItem> $characteristics
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
    * Массив с размерами. <br> 
    Если для размерного товара (обувь, одежда и др.) не указать этот массив, то системой в карточке он будет сгенерирован автоматически с `techSize` = "A" и `wbSize` = "1" и баркодом.
    
    *
    * @return list<ContentV2CardsUploadAddPostBodyCardsToAddItemSizesItem>
    */
    public function getSizes(): array
    {
        return $this->sizes;
    }
    /**
    * Массив с размерами. <br> 
    Если для размерного товара (обувь, одежда и др.) не указать этот массив, то системой в карточке он будет сгенерирован автоматически с `techSize` = "A" и `wbSize` = "1" и баркодом.
    
    *
    * @param list<ContentV2CardsUploadAddPostBodyCardsToAddItemSizesItem> $sizes
    *
    * @return self
    */
    public function setSizes(array $sizes): self
    {
        $this->initialized['sizes'] = true;
        $this->sizes = $sizes;
        return $this;
    }
}