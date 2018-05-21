<?php

namespace App\Models\Iterator;

class DinerMenuIterator implements Iterator
{
    /** @var array */
    private $items = [];

    /** @var int */
    private $currentIndex = 0;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function hasNext() : bool
    {
        return $this->items[$this->currentIndex + 1] !== null;
    }

    public function next()
    {
        return $this->items[++$this->currentIndex];
    }
}
