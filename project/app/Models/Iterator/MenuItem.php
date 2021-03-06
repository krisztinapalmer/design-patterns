<?php

namespace App\Models\Iterator;

class MenuItem
{
    /** @var string */
    private $name;

    /** @var string */
    private $description;

    public function __construct(string $name, string $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getDescription() : string
    {
        return $this->description;
    }
}
