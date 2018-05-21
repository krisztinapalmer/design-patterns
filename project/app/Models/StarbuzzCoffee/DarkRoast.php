<?php

namespace App\Models\StarbuzzCoffee;

class DarkRoast implements Beverage
{
    public function cost() : float
    {
        return 0.99;
    }

    public function getDescription() : string
    {
        return 'Most Excellent Dark Roast';
    }
}
