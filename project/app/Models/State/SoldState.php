<?php

namespace App\Models\State;

class SoldState implements State
{
    public $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertCoin()
    {
        echo 'Please wait, we\'re already giving you a gumball.';
    }

    public function ejectCoin()
    {
        echo 'Sorry, you already turned the crank.';
    }

    public function turnCrank()
    {
        echo 'Turning twice doesn\'t get you another gumball.';
    }

    public function dispense()
    {
        $this->gumballMachine->releaseBall();
        if ($this->gumballMachine->getCount() > 0) {
            $this->gumballMachine->setState($this->gumballMachine->getNoCoinState());
        } else {
            $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
        }
    }
}
