<?php

namespace App\Models\SimUDuck;

class MuteQuack implements QuackBehavior
{

    public function quack()
    {
        echo 'I cannot quack.';
    }
}
