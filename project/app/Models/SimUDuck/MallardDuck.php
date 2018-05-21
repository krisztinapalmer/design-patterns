<?php

namespace App\Models\SimUDuck;

class MallardDuck extends Duck implements Flyable, Quackable
{
    public function __construct()
    {
        $this->quackBehavior = new Quack();
        $this->flyBehavior = new FlyWithWings();
    }

    public function display()
    {
        echo 'I look like a mallard.';
    }

    public function fly()
    {
        echo 'I can fly.';
    }

    public function quack()
    {
        echo 'I can quack.';
    }
}
