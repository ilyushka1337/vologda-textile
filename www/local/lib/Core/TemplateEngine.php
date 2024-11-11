<?php
namespace Placestart\Core;

use Bitrix\Main\Application;

class TemplateEngine
{
    private static $instance = null;

    private static function getInstance()
    {
        if (self::$instance)
            return self::$instance;

        $plates = new \League\Plates\Engine(Application::getDocumentRoot() . '/local/plates');
        return self::$instance = $plates;
    }

    public static function render($name, $params = [])
    {
        return self::getInstance()->render($name, $params);
    }
}
