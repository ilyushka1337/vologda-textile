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
     * Создает товар и его предложения. Деактивирует товар если у него нет активных предложений
     * @param array $productInfo параметры товара
     * @param array $offersInfo параметры предложений
     * @return void
     */
    public function productAndOffers(array $productInfo, array $offersInfo)
    {
        $productID = $this->product($productInfo);
        $offerIDs = [];
        foreach ($offersInfo as $offerInfo) {
            $offerID = $this->offer($offerInfo, $productID);
            if ($offerID !== null) {
                $offerIDs[] = $offerID;
            }
        }

        if (count($offerIDs) === 0) {
            $this->deactivateProduct($productID);
        }
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

        if ($productID) {
            $productID = $this->updateProduct($info, $productID);
        } else {
            $productID = $this->createProduct($info);
        }

        return (int) $productID;
    }

    public function updateProduct(array $info, int $productID): int
    {
        $el = new \CIBlockElement;
        $fields = [
            'NAME' => $info['TITLE'],
            'ACTIVE' => 'Y',
            'IBLOCK_SECTION_ID' => $this->sectionHelper->get((int) $info['CATEGORY_NUMBER']),
            'PROPERTY_VALUES' => [
                'CARD_ID' => $info['CARD_ID']
            ]
        ];

        $isSuccess = $el->Update($productID, $fields);

        if (!$isSuccess) {
            throw new Exception\CatalogProductUpdateException($productID, $info['CARD_ID']);
        }

        return $productID;
    }

    public function createProduct(array $info): int
    {
        $el = new \CIBlockElement;
        $fields = [
            'NAME' => $info['TITLE'],
            'ACTIVE' => 'Y',
            'IBLOCK_SECTION_ID' => $this->sectionHelper->get((int) $info['CATEGORY_NUMBER']),
            'PROPERTY_VALUES' => [
                'CARD_ID' => $info['CARD_ID']
            ]
        ];

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

        return $productID;
    }

    /**
     * Создает или обновляет торговое предложение, если оно уже создано в системе. Деактивирует предложение, если его нет в Wildberries.
     * Отличительным свойством предложения является BARCODE
     * @param array $info
     * @param int $parentId ID товара
     * @return int|null ID элемента инфоблока предложений, null если предложения нет в Wildberries
     */
    public function offer(array $info, int $parentId): int|null
    {
        $offerID = $this->findOffer($info['BARCODE']);

        $info['IS_NEW'] == 'N' ? 1 : 2;
        $info['SIZE'] ? $this->sizeHelper->value($info['SIZE']) : null;
        $info['COLOR'] ? $this->colorHelper->value($info['COLOR']) : null;
        $info['PILLOWSLIP_SIZE'] ? $this->pillowslipSizeHelper->value($info['PILLOWSLIP_SIZE']) : null;
        $info['BEDSHEET_SIZE'] ? $this->bedsheetSizeHelper->value($info['BEDSHEET_SIZE']) : null;
        $info['BLANKET_SIZE'] ? $this->blanketSizeHelper->value($info['BLANKET_SIZE']) : null;

        if ($offerID) {
            try {
                $offerID = $this->updateOffer($info, $offerID, $parentId);
            } catch (Exception\WildberriesOfferNotFoundException $e) {
                $this->deactivateOffer($offerID);
                $offerID = null;
            }
        } else {
            try {
                $offerID = $this->createOffer($info, $parentId);
            } catch (Exception\WildberriesOfferNotFoundException $e) {
                $offerID = null;
            }
        }

        return $offerID;
    }

    /**
     * Обновляет торговое предложение
     * @param array $info
     * @param int $offerID ID предложения
     * @param int $parentId ID товара
     * @throws \Placestart\Import\Exception\CatalogOfferUpdateException
     * @throws \Placestart\Import\Exception\WildberriesOfferNotFoundException
     * @return int ID элемента инфоблока предложений
     */
    public function updateOffer(array $info, int $offerID, int $parentId): int
    {
        $wildberriesOffer = $this->findWildberriesOffer($info['ARTICUL_WB']);
        if (!$wildberriesOffer) {
            throw new Exception\WildberriesOfferNotFoundException($info['ARTICUL_WB']);
        }

        $el = new \CIBlockElement;
        $photos = $this->getPhotos(
            $this->parsePhotos($wildberriesOffer['PHOTOS'])
        );
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

        \CIBlockElement::SetPropertyValuesEx($offerID, $this->offersIblockID, [
            'PREVIEW_GALLERY' => ['del' => 'Y']
        ]);

        $isSuccess = $el->Update($offerID, $fields);

        if (!$isSuccess) {
            throw new Exception\CatalogOfferUpdateException($offerID, $info['BARCODE']);
        }

        return $offerID;
    }

    /**
     * Создает торговое предложение
     * @param array $info
     * @param int $parentId ID товара
     * @throws \Placestart\Import\Exception\CatalogProductCreateException
     * @throws \Placestart\Import\Exception\CatalogProductAddException
     * @throws \Placestart\Import\Exception\WildberriesOfferNotFoundException
     * @return int ID элемента инфоблока предложений
     */
    public function createOffer(array $info, int $parentId): int
    {
        $wildberriesOffer = $this->findWildberriesOffer($info['ARTICUL_WB']);
        if (!$wildberriesOffer) {
            throw new Exception\WildberriesOfferNotFoundException($info['ARTICUL_WB']);
        }

        $photos = $this->getPhotos(
            $this->parsePhotos($wildberriesOffer['PHOTOS'])
        );

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

        $date = new \DateTime('now', new \DateTimeZone('Europe/Moscow'));
        $offerID = $el->Add(array_merge($fields, [
            'IBLOCK_ID' => $this->offersIblockID,
            'ACTIVE_FROM' => $date->format('d.m.Y H:i:s'),
            'CODE' => 'placeholder',
        ]));

        if (!$offerID > 0) {
            throw new Exception\CatalogProductCreateException($info['CARD_ID']);
        }

        $this->symbolCodeHelper->setElementCode($info['DESCRIPTION'], $this->offersIblockID, $offerID);

        $productAddResult = Product::add([
            'ID' => $offerID,
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
            'PRODUCT_ID' => $offerID,
            'CATALOG_GROUP_ID' => 1,
            'PRICE' => 100,
            'CURRENCY' => 'RUB'
        ]);

        if (!$productAddResult->isSuccess()) {
            throw new Exception\CatalogProductAddException($offerID, 'offer');
        }

        return $offerID;
    }

    public function deactivateOffer(int $offerID)
    {
        $el = new \CIBlockElement;
        $fields = [
            'ACTIVE' => 'N'
        ];

        $isSuccess = $el->Update($offerID, $fields);

        if (!$isSuccess) {
            throw new Exception\CatalogOfferDeactivateException($offerID);
        }

        return true;
    }

    public function deactivateProduct(int $productID)
    {
        $el = new \CIBlockElement;
        $fields = [
            'ACTIVE' => 'N'
        ];

        $isSuccess = $el->Update($productID, $fields);

        if (!$isSuccess) {
            throw new Exception\CatalogProductDeactivateException($productID);
        }

        return true;
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