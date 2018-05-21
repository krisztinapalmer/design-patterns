<?php

namespace App\Models\SimUDuck;

class FlyRocketPowered implements FlyBehavior
{
    public function fly()
    {
        echo 'I am flying with a rocket.';
    }
}
