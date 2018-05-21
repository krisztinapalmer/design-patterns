<?php

namespace App\Http\Controllers;
use App\Models\StarbuzzCoffee\Beverage;
use App\Models\StarbuzzCoffee\DarkRoast;
use App\Models\StarbuzzCoffee\Espresso;
use App\Models\StarbuzzCoffee\HouseBlend;
use App\Models\StarbuzzCoffee\Mocha;
use App\Models\StarbuzzCoffee\Soy;
use App\Models\StarbuzzCoffee\Whip;

/**
 * Decorator Pattern
 */
class StarbuzzCoffee extends Controller
{
    public function index()
    {
        /** @var Beverage $beverage */
        $beverage = new Espresso();
        echo $beverage->getDescription() . ' $' . $beverage->cost();

        $beverage2 = new DarkRoast();
        $beverage2 = new Mocha($beverage2);
        $beverage2 = new Mocha($beverage2);
        $beverage2 = new Whip($beverage2);
        echo $beverage2->getDescription() . ' $' . $beverage2->cost();

        $beverage3 = new HouseBlend();
        $beverage3 = new Soy($beverage3);
        $beverage3 = new Mocha($beverage3);
        $beverage3 = new Whip($beverage3);
        echo $beverage3->getDescription() . ' $' . $beverage3->cost();
    }
}
