<?php
namespace Placestart\Core\Component;

abstract class Boilerplate extends \CBitrixComponent
{
    protected $cacheKeys = [];

    protected static $name = "Boilerplate";

    protected static $group = "placestart";


    protected static $groups = [
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

    public static function getComponentParameters(): Parameters
    {
        $params = new Parameters();
        return $params;
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
