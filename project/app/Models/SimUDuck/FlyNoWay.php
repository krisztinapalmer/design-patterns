<?php

namespace App\Models\SimUDuck;

class FlyNoWay implements FlyBehavior
{

    public function fly()
    {
        echo 'I cannot fly.';
    }
}
