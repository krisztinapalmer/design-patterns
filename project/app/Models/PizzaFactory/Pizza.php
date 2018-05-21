<?php

namespace App\PizzaFactory;

abstract class Pizza
{
    public $name;
    public $dough;
    public $sauce;
    public $toppings = [];

    public function prepare() : void
    {
        echo 'prepare';
    }

    public function bake() : void
    {
        echo 'bake';
    }

    public function cut() : void
    {
        echo 'cut';
    }

    public function box() : void
    {
        echo 'box';
    }
}
