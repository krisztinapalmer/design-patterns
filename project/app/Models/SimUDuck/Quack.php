<?php

namespace App\Models\SimUDuck;

class Quack implements QuackBehavior
{

    public function quack()
    {
        echo 'I can quack like a duck';
    }
}
