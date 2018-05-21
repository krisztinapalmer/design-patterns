<?php

namespace App\Models\StarbuzzCoffee;

class Soy extends CondimentDecorator
{
    public function cost(): float
    {
        return 0.30 + $this->beverage->cost();
    }

    public function getDescription() : string
    {
        return $this->beverage->getDescription() . ', Soy';
    }
}
