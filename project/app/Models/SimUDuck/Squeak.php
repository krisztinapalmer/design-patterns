<?php

namespace App\Models\SimUDuck;

class Squeak implements QuackBehavior
{
    public function quack()
    {
        echo 'I can squeak like a rubber duck.';
    }
}
