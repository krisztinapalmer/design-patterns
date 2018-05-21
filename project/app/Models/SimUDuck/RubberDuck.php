<?php

namespace App\Models\SimUDuck;

class RubberDuck extends Duck implements Quackable
{
    public function quack()
    {
        echo 'I can only squeak';
    }

    public function display()
    {
        echo 'I look like a rubber duck';
    }
}
