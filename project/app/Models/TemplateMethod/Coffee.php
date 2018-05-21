<?php

namespace App\Models\TemplateMethod;

class Coffee extends CaffeineBeverage
{
    public function brew() : void
    {
        echo 'Dripping coffee through filter.';
    }

    public function addCondiments() : void
    {
        echo 'Adding sugar and milk.';
    }

    public function customerWantsCondiments() : bool
    {
        return false;
    }
}
