<?php

namespace App\Models\StarbuzzCoffee;

class Mocha extends CondimentDecorator
{
    public function cost() : float
    {
        return 0.20 + $this->beverage->cost();
    }

    public function getDescription() : string
    {
        return $this->beverage->getDescription() . ', Mocha';
    }
}
