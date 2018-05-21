<?php

namespace App\Models\Adapter;

class WildTurkey implements Turkey
{
    public function gobble() : void
    {
        echo 'Gobble, gobble!';
    }

    public function fly() : void
    {
        echo 'I am flying a short distance.';
    }
}
