<?
namespace Placestart\Import;

use Placestart\Import\Exception;
use Bitrix\Iblock\Elements\ElementOffersTable;
use Bitrix\Iblock\Elements\ElementCatalogTable;
use Bitrix\Main\Loader;
use Bitrix\Catalog\Model\Product;
use Bitrix\Catalog\ProductTable;

class CatalogHelper
{
    private int $catalogIblockID;

    private int $offersIblockID;

    function __construct(
        private SectionHelper $sectionHelper,
        private SymbolCodeHelper $symbolCodeHelper
    ) {
        Loader::requireModule(moduleName: 'iblock');
        Loader::requireModule('highloadblock');
        Loader::requireModule('sale');

        $this->catalogIblockID = ElementCatalogTable::getEntity()->getIblock()->getId();
        $this->offersIblockID = ElementOffersTable::getEntity()->getIblock()->getId();
    }

    /**
     * Создает или обновляет товар
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
                "ID" => $productID,
                "VAT_ID" => 1,
                "VAT_INCLUDED" => "Y",
                "TYPE" => ProductTable::TYPE_EMPTY_SKU
            ]);

            if (!$productAddResult->isSuccess()) {
                throw new Exception\CatalogProductAddException($productID, 'product');
            }
        }

        return (int) $productID;
    }

    /**
     * Создает или обновляет торговое предложение
     * @param array $info
     * @return int ID элемента инфоблока предложений
     */

    public function offer(array $info): int|null
    {
        $productID = $this->findOffer($info['BARCODE']);

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
}