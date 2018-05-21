<?php

namespace App\Models\StarbuzzCoffee;

class HouseBlend implements Beverage
{
    public function cost() : float
    {
        return 0.89;
    }

    public function getDescription() : string
    {
        return 'House Blend Coffee';
    }
}
