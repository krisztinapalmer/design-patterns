<?php

namespace App\Models\State;

class GumballMonitor
{
    /** @var GumballMachine */
    public $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function report()
    {
        echo 'Gumball Machine: ' . $this->gumballMachine->getLocation();
        echo 'Current inventory: ' . $this->gumballMachine->getCount() . ' gumballs';
    }
}
