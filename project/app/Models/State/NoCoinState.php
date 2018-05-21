<?php

namespace App\Models\State;

class NoCoinState implements State
{
    public $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertCoin()
    {
        echo 'You inserted a coin.';
        $this->gumballMachine->setState($this->gumballMachine->getHasCoinState());
    }

    public function ejectCoin()
    {
        echo 'You haven\'t inserted a coin.';
    }

    public function turnCrank()
    {
        echo 'You turned, but there\'s no coin.';
    }

    public function dispense()
    {
        echo 'You need to pay first.';
    }
}
