<?php

namespace App\Models\StarbuzzCoffee;

class Decaf implements Beverage
{
    public function cost() : float
    {
        return 1.05;
    }

    public function getDescription() : string
    {
        return 'Decaf';
    }
}
