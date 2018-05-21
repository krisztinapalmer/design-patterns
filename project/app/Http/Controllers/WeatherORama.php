<?php

namespace App\Http\Controllers;

use App\Models\WeatherORama\CurrentConditionsDisplay;
use App\Models\WeatherORama\ForecastDisplay;
use App\Models\WeatherORama\WeatherData;

/**
 * Observer Pattern
 */
class WeatherORama extends Controller
{
    public function index()
    {
        /** @var WeatherData $weatherData */
        $weatherData = new WeatherData();

        /** @var CurrentConditionsDisplay $currentDisplay */
        $currentDisplay = new CurrentConditionsDisplay($weatherData);

        /** @var ForecastDisplay $forecastDisplay */
        $forecastDisplay = new ForecastDisplay($weatherData);

        $weatherData->setMeasurements(80, 65, 30.4);
    }
}
