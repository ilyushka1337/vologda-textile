<?php
use Bitrix\Main\Application;
if (file_exists(Application::getDocumentRoot() . '/local/vendor/autoload.php')) {
    require_once Application::getDocumentRoot() . '/local/vendor/autoload.php';
}
