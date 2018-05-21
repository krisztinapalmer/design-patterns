<?php

namespace App\Models\SimUDuck;

class ModelDuck extends Duck
{
    public function __construct()
    {
        $this->quackBehavior = new Quack();
        $this->flyBehavior = new FlyNoWay();
    }

    public function display()
    {
        echo 'I am a model duck.';
    }
}
