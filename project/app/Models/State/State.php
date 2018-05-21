<?php

namespace App\Models\State;

interface State
{
    public function insertCoin();
    public function ejectCoin();
    public function turnCrank();
    public function dispense();
}
