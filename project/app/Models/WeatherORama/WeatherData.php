<?php

namespace App\Models\WeatherORama;

class WeatherData implements Subject
{
    private $observers = [];
    private $temp;
    private $humidity;
    private $pressure;

    public function registerObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function removeObserver(Observer $observer)
    {
        $index = array_search($observer, $this->observers);
        if ($index === true) {
            array_splice($this->observers, $index, 1);
        }
    }

    public function notifyObservers()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->temp, $this->humidity, $this->pressure);
        }
    }

    public function getTemperature()
    {
        return $this->temp;
    }

    public function getHumidity()
    {
        return $this->humidity;
    }

    public function getPressure()
    {
        return $this->pressure;
    }

    public function measurementsChanged()
    {
        $this->notifyObservers();
    }

    public function setMeasurements(float $temp, float $humidity, float $pressure)
    {
        $this->temp = $temp;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChanged();
    }
}
