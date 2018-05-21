<?php

namespace App\PizzaFactory;

class ChicagoPizzaStore extends PizzaStore {

    public function createPizza(string $type) : Pizza
    {
        $pizza = null;

        if ($type === 'cheese') {
            $pizza = new ChicagoStyleCheesePizza();
        } else if ($type === 'pepperoni') {
            $pizza = new ChicagoStylePepperoniPizza();
        } else if ($type === 'clam') {
            $pizza = new ChicagoStyleClamPizza();
        } else if ($type === 'veggie') {
            $pizza = new ChicagoStyleVeggiePizza();
        }

        return $pizza;
    }
}
