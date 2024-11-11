<?php

namespace Placestart\Core\Component;

class Description
{
    private static $groups = [
        "placestart" => [
            "ID" => "placestart",
            "NAME" => "PLACESTART"
        ],
        "pages" => [
            "ID" => "pages",
            "NAME" => "Шаблоны страниц"
        ]
    ];

    private readonly string $name;

    private readonly string $group;

    function __construct(string $name, string $group = "placestart")
    {
        $this->name = $name;
        $this->group = $group;
    }

    public function getDescription()
    {
        return [
            "NAME" => $this->name,
            "DESCRIPTION" => $this->name,
            "PATH" => static::$groups[$this->group],
        ];
    }
}