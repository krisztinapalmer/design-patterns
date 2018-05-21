<?php

namespace App\Models\State;

class HasCoinState implements State
{
    public $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertCoin()
    {
        echo 'You can\'t insert another coin.';
    }

    public function ejectCoin()
    {
        echo 'Coin returned.';
        $this->gumballMachine->setState($this->gumballMachine->getNoCoinState());
    }

    public function turnCrank()
    {
        echo 'You turned...';
        $this->gumballMachine->setState($this->gumballMachine->getSoldState());
    }

    public function dispense()
    {
        echo 'No gumball dispensed.';
    }
}
