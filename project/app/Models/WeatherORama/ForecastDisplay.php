<?php

namespace App\Models\WeatherORama;

class ForecastDisplay implements Observer, DisplayElement
{
    /** @var float */
    private $lastPressure;

    public function __construct(Subject $weatherData)
    {
        $weatherData->registerObserver($this);
    }

    public function update(float $temp, float $humidity, float $pressure)
    {
        $this->lastPressure = $pressure;
        $this->display();
    }

    public function display()
    {
        echo 'The last pressure is: ' . $this->lastPressure;
    }
}
