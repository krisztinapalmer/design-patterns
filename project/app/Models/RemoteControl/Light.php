<?php

namespace App\Models\RemoteControl;

/**
 * Receiver.
 */
class Light
{
    private $light = false;

    public function on() : void
    {
        $this->light = true;
    }

    public function off() : void
    {
        $this->light = false;
    }

    public function getLight() : bool
    {
        return $this->light;
    }
}
