<?php

namespace App\Models\StarbuzzCoffee;

class Milk extends CondimentDecorator
{
    public function cost() : float
    {
        return 0.10 + $this->beverage->cost();
    }

    public function getDescription() : string
    {
        return $this->beverage->getDescription() . ', Milk';
    }
}
