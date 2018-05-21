<?php

namespace App\Models\SimUDuck;

abstract class Duck
{
    /** @var FlyBehavior */
    public $flyBehavior;

    /** @var QuackBehavior */
    public $quackBehavior;

    public function performQuack()
    {
        $this->quackBehavior->quack();
    }

    public function performFly()
    {
        $this->flyBehavior->fly();
    }

    public function setQuackBehavior(QuackBehavior $quackBehavior)
    {
        $this->quackBehavior = $quackBehavior;
    }

    public function setFlyBehavior(FlyBehavior $flyBehavior)
    {
        $this->flyBehavior = $flyBehavior;
    }


    public function swim()
    {
        echo 'I can swim.';
    }

    abstract public function display();
}
