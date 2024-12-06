<?
namespace Placestart\Import\Entity;
use Bitrix\Main\Entity;

class WildberriesCardTable extends Entity\DataManager
{
    public static function getTableName()
    {
        return 'placestart_wildberries_card';
    }

    public static function getMap()
    {
        return [
            new Entity\IntegerField('ID', [
                'primary' => true,
                'autocomplete' => true
            ]),
            new Entity\StringField('NM_ID', [
                'required' => true
            ]),
            new Entity\StringField('IMT_ID', [
                'required' => true
            ]),
            new Entity\StringField('PHOTOS', [
                'required' => true,
            ]),
        ];
    }
}