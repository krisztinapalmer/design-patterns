<?php

namespace App\Http\Controllers;

use App\PizzaFactory\NYPizzaStore;

class PizzaFactory extends Controller
{
    public function index()
    {
        /** @var NYPizzaStore $nyPizzaStore */
        $nyPizzaStore = new NYPizzaStore();
        $pizza = $nyPizzaStore->orderPizza('cheese');
        echo $pizza->name;
    }
}
