<?php

namespace Placestart\WildberriesApi\Model;

class ContentV2CardsUploadPostBodyItemVariantsItem extends \ArrayObject
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
     * Артикул продавца
     *
     * @var string
     */
    protected $vendorCode;
    /**
    * Габариты упаковки товара. Указывать в **сантиметрах** для любого товара. 
    <br> 
    Если не указать структуру dimensions в запросе, то она сгенерируется системой автоматически с нулевыми значениями длины, ширины, высоты
    
    *
    * @var ContentV2CardsUploadPostBodyItemVariantsItemDimensions
    */
    protected $dimensions;
    /**
    * Массив с размерами. <br> 
    Если для размерного товара (обувь, одежда и др.) не указать этот массив, то системой в карточке он будет сгенерирован автоматически с `techSize` = "A" и `wbSize` = "1" и баркодом.
    
    *
    * @var list<ContentV2CardsUploadPostBodyItemVariantsItemSizesItem>
    */
    protected $sizes;
    /**
     * Массив характеристик товара
     *
     * @var list<ContentV2CardsUploadPostBodyItemVariantsItemCharacteristicsItem>
     */
    protected $characteristics;
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
    * Габариты упаковки товара. Указывать в **сантиметрах** для любого товара. 
    <br> 
    Если не указать структуру dimensions в запросе, то она сгенерируется системой автоматически с нулевыми значениями длины, ширины, высоты
    
    *
    * @return ContentV2CardsUploadPostBodyItemVariantsItemDimensions
    */
    public function getDimensions(): ContentV2CardsUploadPostBodyItemVariantsItemDimensions
    {
        return $this->dimensions;
    }
    /**
    * Габариты упаковки товара. Указывать в **сантиметрах** для любого товара. 
    <br> 
    Если не указать структуру dimensions в запросе, то она сгенерируется системой автоматически с нулевыми значениями длины, ширины, высоты
    
    *
    * @param ContentV2CardsUploadPostBodyItemVariantsItemDimensions $dimensions
    *
    * @return self
    */
    public function setDimensions(ContentV2CardsUploadPostBodyItemVariantsItemDimensions $dimensions): self
    {
        $this->initialized['dimensions'] = true;
        $this->dimensions = $dimensions;
        return $this;
    }
    /**
    * Массив с размерами. <br> 
    Если для размерного товара (обувь, одежда и др.) не указать этот массив, то системой в карточке он будет сгенерирован автоматически с `techSize` = "A" и `wbSize` = "1" и баркодом.
    
    *
    * @return list<ContentV2CardsUploadPostBodyItemVariantsItemSizesItem>
    */
    public function getSizes(): array
    {
        return $this->sizes;
    }
    /**
    * Массив с размерами. <br> 
    Если для размерного товара (обувь, одежда и др.) не указать этот массив, то системой в карточке он будет сгенерирован автоматически с `techSize` = "A" и `wbSize` = "1" и баркодом.
    
    *
    * @param list<ContentV2CardsUploadPostBodyItemVariantsItemSizesItem> $sizes
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
     * Массив характеристик товара
     *
     * @return list<ContentV2CardsUploadPostBodyItemVariantsItemCharacteristicsItem>
     */
    public function getCharacteristics(): array
    {
        return $this->characteristics;
    }
    /**
     * Массив характеристик товара
     *
     * @param list<ContentV2CardsUploadPostBodyItemVariantsItemCharacteristicsItem> $characteristics
     *
     * @return self
     */
    public function setCharacteristics(array $characteristics): self
    {
        $this->initialized['characteristics'] = true;
        $this->characteristics = $characteristics;
        return $this;
    }
}