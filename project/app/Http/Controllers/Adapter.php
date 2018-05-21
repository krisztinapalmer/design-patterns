<?php

namespace App\Http\Controllers;

use App\Models\Adapter\DuckAdapter;
use App\Models\Adapter\MallardDuck;
use App\Models\Adapter\TurkeyAdapter;
use App\Models\Adapter\WildTurkey;

class Adapter extends Controller
{
    public function index()
    {
        /** @var MallardDuck $duck */
        $duck = new MallardDuck();

        /** @var WildTurkey $turkey */
        $turkey = new WildTurkey();

        /** @var TurkeyAdapter $turkeyAdapter */
        $turkeyAdapter = new TurkeyAdapter($turkey);

        /** @var DuckAdapter $duckAdapter */
        $duckAdapter = new DuckAdapter($duck);

        print 'The turkey says... ';
        $turkey->gobble();
        $turkey->fly();

        print 'The duck says...';
        $duck->quack();
        $duck->fly();

        print 'The TurkeyAdapter says...';
        $turkeyAdapter->quack();
        $turkeyAdapter->fly();

        print 'The DuckAdapter says...';
        $duckAdapter->gobble();
        $duckAdapter->fly();
    }
}
