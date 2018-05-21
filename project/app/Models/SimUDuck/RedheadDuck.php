<?php

namespace App\Models\SimUDuck;

class RedheadDuck extends Duck implements Flyable, Quackable
{
    public function display()
    {
        echo 'I look like a redhead.';
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
