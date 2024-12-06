<?php

namespace Placestart\WildberriesApi\Model;

class ContentV2CardsUpdatePostBodyItem extends \ArrayObject
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
     * Габариты упаковки товара. Указывать в **сантиметрах** для любого товара.
     *
     * @var ContentV2CardsUpdatePostBodyItemDimensions
     */
    protected $dimensions;
    /**
     * Характеристики товара
     *
     * @var list<ContentV2CardsUpdatePostBodyItemCharacteristicsItem>
     */
    protected $characteristics;
    /**
     * Массив размеров артикула. <br> Для безразмерного товара все равно нужно передавать данный массив без параметров (wbSize и techSize), но с баркодом.                          
     *
     * @var list<ContentV2CardsUpdatePostBodyItemSizesItem>
     */
    protected $sizes;
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
     * Габариты упаковки товара. Указывать в **сантиметрах** для любого товара.
     *
     * @return ContentV2CardsUpdatePostBodyItemDimensions
     */
    public function getDimensions(): ContentV2CardsUpdatePostBodyItemDimensions
    {
        return $this->dimensions;
    }
    /**
     * Габариты упаковки товара. Указывать в **сантиметрах** для любого товара.
     *
     * @param ContentV2CardsUpdatePostBodyItemDimensions $dimensions
     *
     * @return self
     */
    public function setDimensions(ContentV2CardsUpdatePostBodyItemDimensions $dimensions): self
    {
        $this->initialized['dimensions'] = true;
        $this->dimensions = $dimensions;
        return $this;
    }
    /**
     * Характеристики товара
     *
     * @return list<ContentV2CardsUpdatePostBodyItemCharacteristicsItem>
     */
    public function getCharacteristics(): array
    {
        return $this->characteristics;
    }
    /**
     * Характеристики товара
     *
     * @param list<ContentV2CardsUpdatePostBodyItemCharacteristicsItem> $characteristics
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
     * Массив размеров артикула. <br> Для безразмерного товара все равно нужно передавать данный массив без параметров (wbSize и techSize), но с баркодом.                          
     *
     * @return list<ContentV2CardsUpdatePostBodyItemSizesItem>
     */
    public function getSizes(): array
    {
        return $this->sizes;
    }
    /**
     * Массив размеров артикула. <br> Для безразмерного товара все равно нужно передавать данный массив без параметров (wbSize и techSize), но с баркодом.                          
     *
     * @param list<ContentV2CardsUpdatePostBodyItemSizesItem> $sizes
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