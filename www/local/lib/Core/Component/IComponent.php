<?php
namespace Placestart\Core\Component;

interface IComponent
{
    public static function getComponentDescription(): Description;

    public static function getComponentParameters(): Parameters;
}