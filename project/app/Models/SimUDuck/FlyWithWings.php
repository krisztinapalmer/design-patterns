<?php

namespace App\Models\SimUDuck;

class FlyWithWings implements FlyBehavior
{
    public function fly()
    {
        echo 'I can fly with wings.';
    }
}
