<?php

namespace App\Http\Controllers;

use App\Models\State\GumballMachine;

class State extends Controller
{
    public function index()
    {
        $gumballMachine = new GumballMachine('shopping centre',5);
        $gumballMachine->insertCoin();
        $gumballMachine->turnCrack();
    }
}
