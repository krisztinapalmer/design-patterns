<?php

namespace App\Http\Controllers;

use App\Models\SimUDuck\FlyRocketPowered;
use App\Models\SimUDuck\MallardDuck;
use App\Models\SimUDuck\ModelDuck;

/**
 * Strategy Pattern
 */
class SimUDuck extends Controller
{
    public function index()
    {
        /** @var MallardDuck $mallard */
        $mallard = new MallardDuck();
        $mallard->performFly();

        /** @var ModelDuck $model */
        $model = new ModelDuck();
        $model->performFly();
        $model->setFlyBehavior(new FlyRocketPowered());
        $model->performFly();
    }
}
