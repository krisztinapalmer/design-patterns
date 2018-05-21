<?php

namespace App\Models\TemplateMethod;

abstract class CaffeineBeverage
{
    final public function prepareRecipe() : void
    {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();

        if ($this->customerWantsCondiments() === true) {
            $this->addCondiments();
        }
    }

    final public function boilWater() : void
    {
        echo 'Boiling water';
    }

    abstract public function brew() : void;

    final public function pourInCup() : void
    {
        echo 'Pouring into cup';
    }

    abstract public function addCondiments() : void;

    /**
     * This is a hook - the subclass can override this method.
     *
     * @return bool
     */
    public function customerWantsCondiments() : bool
    {
        return true;
    }
}
