<?php

namespace App\Models\RemoteControl;

/**
 * Invoker.
 */
class SimpleRemoteControl
{
    private $onCommands = [];
    private $offCommands = [];
    private $undoCommand;

    public function setCommand(int $slot, Command $onCommand, Command $offCommand = null) : void
    {
        $this->onCommands[$slot] = $onCommand;
        $this->offCommands[$slot ] = $offCommand;
    }

    public function onButtonWasPushed(int $slot) : void
    {
        $this->onCommands[$slot]->execute();
        $this->undoCommand = $this->onCommands[$slot];
    }

    public function offButtonWasPushed(int $slot) : void
    {
        $this->offCommands[$slot]->execute();
        $this->undoCommand = $this->offCommands[$slot];
    }

    public function undoButtonWasPushed() : void
    {
        $this->undoCommand->undo();
    }
}
