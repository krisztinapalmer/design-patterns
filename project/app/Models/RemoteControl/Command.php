<?php

namespace App\Models\RemoteControl;

interface Command
{
    public function execute();

    public function undo();
}
