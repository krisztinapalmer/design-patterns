<?php

namespace App\Models\Iterator;

interface Iterator
{
    public function hasNext() : bool;
    public function next();
}
