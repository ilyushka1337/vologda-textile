<?php
use Placestart\Core\TemplateEngine;

function tpl($name, $params = [])
{
    return TemplateEngine::render($name, $params);
}

function tpl_js($php_data = [])
{
    return CUtil::PhpToJSObject($php_data);
}
