<?
namespace Placestart\Import\Entity;
use Bitrix\Main\Entity;

class XlsxProductTable extends Entity\DataManager
{
    public static function getTableName()
    {
        return 'placestart_xlsx_product';
    }

    public static function getMap()
    {
        return [
            new Entity\IntegerField('ID', [
                'primary' => true,
                'autocomplete' => true
            ]),
            new Entity\IntegerField('BARCODE', [
                'required' => true
            ]),
            new Entity\StringField('DESCRIPTION', [
                'nullable' => true
            ]),
            new Entity\StringField('ARTICUL_WB', [
                'required' => true
            ]),
            new Entity\StringField('ARTICUL_OZON', [
                'nullable' => true
            ]),
            new Entity\IntegerField('CARD_ID', [
                'required' => true
            ]),
            new Entity\StringField('SIZE', [
                'required' => true
            ]),
            new Entity\StringField('PILLOWSLIP_SIZE', [
                'nullable' => true
            ]),
            new Entity\StringField('COLOR', [
                'required' => true
            ]),
            new Entity\StringField('TITLE', [
                'required' => true
            ]),
            new Entity\BooleanField('IS_NEW', [
                'nullable' => true,
                'values' => ['N', 'Y']
            ]),
            new Entity\StringField('TOP_CATEGORY_NAME', [
                'required' => true
            ]),
            new Entity\StringField('CATEGORY_NUMBER', [
                'required' => true
            ]),
            new Entity\StringField('BEDSHEET_SIZE', [
                'nullable' => true
            ]),
            new Entity\StringField('BLANKET_SIZE', [
                'nullable' => true
            ])
        ];
    }
}