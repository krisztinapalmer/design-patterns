<?php

namespace App\Models\RemoteControl;

/**
 * Receiver.
 */
class GarageDoor
{
    private $door = 0;

    public function up() : void
    {
        $this->door++;
    }

    public function down() : void
    {
        $this->door--;
    }

    public function getDoor() : int
    {
        return $this->door;
    }
}
