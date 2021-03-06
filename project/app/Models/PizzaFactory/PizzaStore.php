<?php

namespace App\PizzaFactory;

abstract class PizzaStore
{
    public function orderPizza(string $type) : Pizza
    {
        $pizza = $this->createPizza($type);
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }

    abstract public function createPizza(string $type);
}
