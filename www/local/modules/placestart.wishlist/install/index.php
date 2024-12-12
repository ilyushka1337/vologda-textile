<?php
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\ModuleManager;
use Bitrix\Main\Loader;

Loc::loadMessages(__FILE__);

class placestart_wishlist extends CModule
{
    var $MODULE_ID = "placestart.wishlist";
    var $MODULE_VERSION;
    var $MODULE_VERSION_DATE;
    var $MODULE_NAME;
    var $MODULE_DESCRIPTION;
    var $MODULE_CSS;

    function __construct()
    {
        $arModuleVersion = [];

        include_once(__DIR__ . "/version.php");

        $this->MODULE_VERSION = $arModuleVersion["VERSION"];
        $this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
        $this->MODULE_NAME = "Избранные товары";
        $this->MODULE_DESCRIPTION = "Избранные товары";
        $this->PARTNER_NAME = "PLACESTART";
        $this->PARTNER_URI = "https://place-start.ru/";
    }

    public function InstallFiles()
    {
        return false;
    }

    public function InstallDB()
    {
        return false;
    }

    public function InstallEvents()
    {
        return false;
    }

    public function DoInstall()
    {
        global $APPLICATION;


        if (!CheckVersion(ModuleManager::getVersion('main'), '14.00.00')) {
            $APPLICATION->ThrowException('Версия главного модуля ниже 14.00.00');
            return false;
        }

        ModuleManager::registerModule($this->MODULE_ID);

        $APPLICATION->IncludeAdminFile("Модуль установлен", __DIR__ . "/step.php");
    }

    public function DoUninstall()
    {
        global $APPLICATION;

        ModuleManager::unRegisterModule($this->MODULE_ID);

        $APPLICATION->IncludeAdminFile("Модуль удален", __DIR__ . "/unstep.php");
    }
}
