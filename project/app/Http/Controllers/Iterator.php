<?php

namespace App\Http\Controllers;

use App\Models\Iterator\DinerMenu;

class Iterator extends Controller
{
    public function index()
    {
        $menu = new DinerMenu();
        $iterator = $menu->createIterator();

        while ($iterator->hasNext() === true) {
            $item = $iterator->next();
            echo $item->getName;
        }
    }
}
