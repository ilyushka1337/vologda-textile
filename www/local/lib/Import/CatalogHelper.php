<?
namespace Placestart\Import;

use PhpParser\Node\NullableType;
use Placestart\Import\Entity\WildberriesCardTable;
use Placestart\Import\Exception;
use Bitrix\Iblock\Elements\ElementOffersTable;
use Bitrix\Iblock\Elements\ElementCatalogTable;
use Bitrix\Main\Loader;
use Bitrix\Catalog\Model\Product;
use Bitrix\Catalog\Model\Price;
use Bitrix\Catalog\ProductTable;

class CatalogHelper
{
    private int $catalogIblockID;

    private int $offersIblockID;

    function __construct(
        private SectionHelper $sectionHelper,
        private SymbolCodeHelper $symbolCodeHelper,
        private PhotoDownloader $photoDownloader,
        private HighloadHelper $sizeHelper,
        private HighloadHelper $pillowslipSizeHelper,
        private HighloadHelper $colorHelper,
        private HighloadHelper $bedsheetSizeHelper,
        private HighloadHelper $blanketSizeHelper,
    ) {
        Loader::requireModule('iblock');
        Loader::requireModule('highloadblock');
        Loader::requireModule('sale');

        $this->catalogIblockID = ElementCatalogTable::getEntity()->getIblock()->getId();
        $this->offersIblockID = ElementOffersTable::getEntity()->getIblock()->getId();
    }

    /**
     * Создает или обновляет товар.
     * Отличительным свойством товара является CARD_ID
     * @param array $info
     * @return int ID элемента инфоблока товаров
     */
    public function product(array $info): int
    {
        $productID = $this->findProduct($info['CARD_ID']);

        $el = new \CIBlockElement;
        $fields = [
            'NAME' => $info['TITLE'],
            'ACTIVE' => 'Y',
            'IBLOCK_SECTION_ID' => $this->sectionHelper->get((int) $info['CATEGORY_NUMBER']),
            'PROPERTY_VALUES' => [
                'CARD_ID' => $info['CARD_ID']
            ]
        ];

        if ($productID) {
            $isSuccess = $el->Update($productID, $fields);

            if (!$isSuccess) {
                throw new Exception\CatalogProductUpdateException($productID, $info['CARD_ID']);
            }
        } else {
            $date = new \DateTime('now', new \DateTimeZone('Europe/Moscow'));
            $productID = $el->Add(array_merge($fields, [
                'IBLOCK_ID' => $this->catalogIblockID,
                'ACTIVE_FROM' => $date->format('d.m.Y H:i:s'),
                'CODE' => 'placeholder',
            ]));

            if (!$productID > 0) {
                throw new Exception\CatalogProductCreateException($info['CARD_ID']);
            }

            $this->symbolCodeHelper->setElementCode($info['TITLE'], $this->catalogIblockID, $productID);

            $productAddResult = Product::add([
                'ID' => $productID,
                'VAT_ID' => 1,
                'VAT_INCLUDED' => 'Y',
                'WIDTH' => 100,
                'HEIGHT' => 100,
                'LENGTH' => 100,
                'WEIGHT' => 100,
                'QUANTITY' => 0,
                'QUANTITY_RESERVED' => 0,
                'TYPE' => ProductTable::TYPE_EMPTY_SKU
            ]);

            if (!$productAddResult->isSuccess()) {
                throw new Exception\CatalogProductAddException($productID, 'product');
            }
        }

        return (int) $productID;
    }

    /**
     * Создает или обновляет торговое предложение.
     * Отличительным свойством предложения является BARCODE
     * @param array $info
     * @return int ID элемента инфоблока предложений
     */
    public function offer(array $info, int $parentId): int|null
    {
        $wildberriesOffer = $this->findWildberriesOffer($info['ARTICUL_WB']);
        if (!$wildberriesOffer) {
            return null;
        }

        $photos = $this->getPhotos(
            $this->parsePhotos($wildberriesOffer['PHOTOS'])
        );
        $productID = $this->findOffer($info['BARCODE']);

        $info['IS_NEW'] == 'N' ? 1 : 2;
        $info['SIZE'] ? $this->sizeHelper->value($info['SIZE']) : null;
        $info['COLOR'] ? $this->colorHelper->value($info['COLOR']) : null;
        $info['PILLOWSLIP_SIZE'] ? $this->pillowslipSizeHelper->value($info['PILLOWSLIP_SIZE']) : null;
        $info['BEDSHEET_SIZE'] ? $this->bedsheetSizeHelper->value($info['BEDSHEET_SIZE']) : null;
        $info['BLANKET_SIZE'] ? $this->blanketSizeHelper->value($info['BLANKET_SIZE']) : null;

        $el = new \CIBlockElement;
        $fields = [
            'NAME' => $info['DESCRIPTION'],
            'ACTIVE' => 'Y',
            'PREVIEW_PICTURE' => $photos[0] ?? null,
            'DETAIL_PICTURE' => $photos[0] ?? null,
            'PROPERTY_VALUES' => [
                'CML2_LINK' => $parentId,
                'BARCODE' => $info['BARCODE'],
                'ARTICUL_WB' => $info['ARTICUL_WB'],
                'ARTICUL_OZON' => $info['ARTICUL_OZON'],
                'IS_NEW' => $info['IS_NEW'] == 'N' ? 1 : 2,
                'SIZE' => $info['SIZE'],
                'COLOR' => $info['COLOR'],
                'PILLOWSLIP_SIZE' => $info['PILLOWSLIP_SIZE'],
                'BEDSHEET_SIZE' => $info['BEDSHEET_SIZE'],
                'BLANKET_SIZE' => $info['BLANKET_SIZE'],
                'PREVIEW_GALLERY' => count($photos) > 0 ? $photos : null,
            ]
        ];

        if ($productID) {
            \CIBlockElement::SetPropertyValuesEx($productID, $this->offersIblockID, [
                'PREVIEW_GALLERY' => ['del' => 'Y']
            ]);
            $isSuccess = $el->Update($productID, $fields);

            if (!$isSuccess) {
                throw new Exception\CatalogOfferUpdateException($productID, $info['BARCODE']);
            }
        } else {
            $date = new \DateTime('now', new \DateTimeZone('Europe/Moscow'));
            $productID = $el->Add(array_merge($fields, [
                'IBLOCK_ID' => $this->offersIblockID,
                'ACTIVE_FROM' => $date->format('d.m.Y H:i:s'),
                'CODE' => 'placeholder',
            ]));

            if (!$productID > 0) {
                throw new Exception\CatalogProductCreateException($info['CARD_ID']);
            }

            $this->symbolCodeHelper->setElementCode($info['DESCRIPTION'], $this->offersIblockID, $productID);

            $productAddResult = Product::add([
                'ID' => $productID,
                'VAT_ID' => 1,
                'VAT_INCLUDED' => 'Y',
                'WIDTH' => 100,
                'HEIGHT' => 100,
                'LENGTH' => 100,
                'WEIGHT' => 100,
                'QUANTITY' => 0,
                'QUANTITY_RESERVED' => 0,
                'TYPE' => ProductTable::TYPE_OFFER
            ]);

            $result = Price::add([
                'PRODUCT_ID' => $productID,
                'CATALOG_GROUP_ID' => 1,
                'PRICE' => 100,
                'CURRENCY' => 'RUB'
            ]);

            if (!$productAddResult->isSuccess()) {
                throw new Exception\CatalogProductAddException($productID, 'product');
            }
        }

        return $productID;
    }

    private function findOffer(string $barcode): int|null
    {
        $q = ElementOffersTable::getList([
            'select' => ['ID'],
            'filter' => ['BARCODE.VALUE' => $barcode],
            'limit' => 1
        ]);

        if ($productElement = $q->fetch()) {
            return $productElement['ID'];
        } else {
            return null;
        }
    }

    private function findProduct(string $cardID): int|null
    {
        $q = ElementCatalogTable::getList([
            'select' => ['ID'],
            'filter' => ['CARD_ID.VALUE' => $cardID],
            'limit' => 1
        ]);

        if ($productElement = $q->fetch()) {
            return $productElement['ID'];
        } else {
            return null;
        }
    }

    private function findWildberriesOffer(string $wildberriesArticul): array|null
    {
        $q = WildberriesCardTable::getList([
            'filter' => [
                'NM_ID' => $wildberriesArticul
            ],
            'limit' => 1
        ]);

        $info = $q->fetch();
        return $info ? $info : null;
    }

    private function parsePhotos(string $photosJSON): array
    {
        return json_decode($photosJSON, true);
    }

    private function getPhotos(array $photoURLs)
    {
        $downloaded = [];
        foreach ($photoURLs as $photo) {
            $downloaded[] = $this->photoDownloader->get($photo);
        }

        return $downloaded;
    }
}