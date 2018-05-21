<?php

namespace App\Http\Controllers;

use App\Models\RemoteControl\GarageDoor;
use App\Models\RemoteControl\GarageDoorOpenCommand;
use App\Models\RemoteControl\Light;
use App\Models\RemoteControl\LightOffCommand;
use App\Models\RemoteControl\LightOnCommand;
use App\Models\RemoteControl\SimpleRemoteControl;

/**
 * Command Pattern - Behavioural
 */
class RemoteControl extends Controller
{
    public function index()
    {
        /**
         * Invoker.
         */
        $remote = new SimpleRemoteControl();

        /**
         * Receiver.
         */
        $light = new Light();

        /**
         * Command.
         */
        $lightOn = new LightOnCommand($light);
        $lightOff = new LightOffCommand($light);

        /**
         * Receiver
         */
        $door = new GarageDoor();

        /**
         * Command
         */
        $doorOpen = new GarageDoorOpenCommand($door);

        $remote->setCommand(0, $lightOn, $lightOff);
        $remote->onButtonWasPushed(0);

        $remote->setCommand(1, $doorOpen);
        $remote->onButtonWasPushed(1);

        $remote->undoButtonWasPushed();

        echo $light->getLight() . ' and ' . $door->getDoor();
    }
}
