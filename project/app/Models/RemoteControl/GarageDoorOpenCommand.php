<?php

namespace App\Models\RemoteControl;

/**
 * Concrete Command.
 */
class GarageDoorOpenCommand implements Command
{
    private $door;

    public function __construct(GarageDoor $door)
    {
        $this->door = $door;
    }

    public function execute() : void
    {
        $this->door->up();
    }

    public function undo() : void
    {
        $this->door->down();
    }
}
