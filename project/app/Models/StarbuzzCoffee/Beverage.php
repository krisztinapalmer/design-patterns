<?php

namespace App\Models\StarbuzzCoffee;

interface Beverage
{
    public function getDescription() : string;

    public function cost() : float;
}
