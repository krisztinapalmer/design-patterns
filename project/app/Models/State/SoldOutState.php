<?php

namespace App\Models\State;

class SoldOutState implements State
{
    public $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertCoin()
    {
        echo 'You can\'t insert a coin, the machine is sold out.';
    }

    public function ejectCoin()
    {
        echo 'You can\'t eject, you haven\'t inserted a coin yet.';
    }

    public function turnCrank()
    {
        echo 'You turned, but there are no gumballs.';
    }

    public function dispense()
    {
        echo 'No gumball dispensed.';
    }
}
