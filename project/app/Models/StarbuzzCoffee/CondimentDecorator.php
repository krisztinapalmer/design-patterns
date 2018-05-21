<?php

namespace App\Models\StarbuzzCoffee;

abstract class CondimentDecorator implements Beverage
{
    protected $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    abstract public function cost() : float;

    abstract public function getDescription() : string;
}
