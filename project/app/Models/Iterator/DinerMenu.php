<?php

namespace App\Models\Iterator;

class DinerMenu
{
    public $items = [];

    public function createIterator() : DinerMenuIterator
    {
        return new DinerMenuIterator($this->items);
    }
}
