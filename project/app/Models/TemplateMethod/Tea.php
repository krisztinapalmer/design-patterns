<?php

namespace App\Models\TemplateMethod;

class Tea extends CaffeineBeverage
{
    public function brew() : void
    {
        echo 'Steeping the tea.';
    }

    public function addCondiments() : void
    {
        echo 'Adding lemon';
    }
}
