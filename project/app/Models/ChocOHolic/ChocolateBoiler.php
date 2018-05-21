<?php

namespace App\Models\ChocOHolic;

class ChocolateBoiler
{
    /** @var bool */
    private $empty;

    /** @var bool */
    private $boiled;

    /** @var ChocolateBoiler */
    private static $instance;

    private function __construct()
    {
        $this->empty = true;
        $this->boiled = false;
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

    public static function getInstance() : ChocolateBoiler
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    public function fill() : void
    {
        if ($this->empty === true) {
            $this->empty = false;
            $this->boiled = false;
        }
    }

    public function drain() : void
    {
        if ($this->empty === false && $this->boiled === true) {
            $this->empty = true;
        }
    }

    public function boil() : void
    {
        if ($this->empty === false && $this->boiled === false) {
            $this->boiled = true;
        }
    }
}
