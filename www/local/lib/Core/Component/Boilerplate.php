<?php
namespace Placestart\Core\Component;

abstract class Boilerplate extends \CBitrixComponent implements IComponent
{
    protected $cacheKeys = [];

    protected static $name = "Boilerplate";

    protected static $group = "placestart";


    public static $groups = [
        "placestart" => [
            "ID" => "placestart",
            "NAME" => "PLACESTART"
        ],
        "pages" => [
            "ID" => "pages",
            "NAME" => "Шаблоны страниц"
        ]
    ];

    public static function getComponentDescription(): Description
    {
        return new Description(static::$name, static::$group);
    }

    protected function getData()
    {
    }

    /**
     * Выполнение компонента, подключение шаблона
     * @return void
     */
    public function executeComponent()
    {
        if ($this->StartResultCache()) {
            $this->getData();
            $this->setResultCacheKeys($this->cacheKeys);
            $this->includeComponentTemplate();
        }
    }
}
