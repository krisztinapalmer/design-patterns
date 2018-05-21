<?php

namespace App\Models\State;

class GumballMachine
{
    /** @var State */
    private $soldOutState;

    /** @var State */
    private $noCoinState;

    /** @var State */
    private $hasCoinState;

    /** @var State */
    private $soldState;

    /** @var State */
    private $state;

    /** @var int */
    private $count = 0;

    /** @var string */
    private $location;

    public function __construct(string $location, int $count)
    {
        $this->soldOutState = new SoldOutState($this);
        $this->noCoinState = new NoCoinState($this);
        $this->hasCoinState = new HasCoinState($this);
        $this->soldState = new SoldState($this);
        $this->count = $count;
        if ($this->count > 0) {
            $this->state = $this->noCoinState;
        } else {
            $this->state = $this->soldOutState;
        }
        $this->location = $location;
    }

    public function insertCoin() : void
    {
        $this->state->insertCoin();
    }

    public function ejectCoin() : void
    {
        $this->state->ejectCoin();
    }

    public function turnCrack() : void
    {
        $this->state->turnCrank();
        $this->state->dispense();
    }

    public function setState(State $state) : void
    {
        $this->state = $state;
    }

    public function releaseBall() : void
    {
        echo 'A gumball comes rolling out the slot...';
        if ($this->count !== 0) {
            $this->count--;
        }
    }

    /**
     * @return State
     */
    public function getSoldOutState() : State
    {
        return $this->soldOutState;
    }

    /**
     * @return State
     */
    public function getNoCoinState() : State
    {
        return $this->noCoinState;
    }

    /**
     * @return State
     */
    public function getHasCoinState() : State
    {
        return $this->hasCoinState;
    }

    /**
     * @return State
     */
    public function getSoldState() : State
    {
        return $this->soldState;
    }

    /**
     * @return State
     */
    public function getState() : State
    {
        return $this->state;
    }

    /**
     * @return int
     */
    public function getCount() : int
    {
        return $this->count;
    }

    /**
     * @return string
     */
    public function getLocation() : string
    {
        return $this->location;
    }
}
