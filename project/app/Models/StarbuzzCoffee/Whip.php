<?php

namespace App\Models\StarbuzzCoffee;

class Whip extends CondimentDecorator
{
    public function cost(): float
    {
        return 0.40 + $this->beverage->cost();
    }

    public function getDescription() : string
    {
        return $this->beverage->getDescription() . ', Whip';
    }
}
