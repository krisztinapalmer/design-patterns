<?php

namespace App\Models\StarbuzzCoffee;

class Espresso implements Beverage
{
    public function cost() : float
    {
        return 1.99;
    }

    public function getDescription() : string
    {
        return 'Espresso';
    }
}
