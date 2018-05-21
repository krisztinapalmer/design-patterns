<?php

namespace App\Models\WeatherORama;

interface Observer
{
    public function update(float $temp, float $humidity, float $pressure);
}
