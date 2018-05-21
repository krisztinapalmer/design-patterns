<?php

namespace App\Models\Adapter;

class MallardDuck implements Duck
{
    public function quack() : void
    {
        echo 'Quack, quack!';
    }

    public function fly() : void
    {
        echo 'I am flying.';
    }
}