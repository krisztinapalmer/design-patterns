<?php

namespace App\Http\Controllers;

use App\Models\TemplateMethod\Coffee;
use App\Models\TemplateMethod\Tea;

/**
 * Template Method - Behavioural
 */
class TemplateMethod extends Controller
{
    public function index()
    {
        /** @var Tea $myTea */
        $myTea = new Tea();

        /** @var Coffee $myCoffee */
        $myCoffee = new Coffee();

        echo 'Making tea... ';
        $myTea->prepareRecipe();

        echo 'Making coffee... ';
        $myCoffee->prepareRecipe();
    }
}
