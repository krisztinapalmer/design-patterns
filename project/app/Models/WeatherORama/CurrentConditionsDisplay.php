<?php

namespace App\Models\WeatherORama;

class CurrentConditionsDisplay implements Observer, DisplayElement
{
    /** @var float */
    private $temp;

    /** @var float */
    private $humidity;

    /** @var Subject */
    private $weatherData;

    public function __construct(Subject $weatherData)
    {
        $this->weatherData = $weatherData;
        $weatherData->registerObserver($this);
    }

    public function update(float $temp, float $humidity, float $pressure)
    {
        $this->temp = $temp;
        $this->humidity = $humidity;
        $this->display();
    }

    public function display()
    {
        echo 'Current conditions: ' . $this->temp . 'F degrees and ' . $this->humidity . '% humidity.';
    }
}
