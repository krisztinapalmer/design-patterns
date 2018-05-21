<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('simuduck', 'SimUDuck@index');
$router->get('weather-o-rama', 'WeatherORama@index');
$router->get('starbuzz-coffee', 'StarbuzzCoffee@index');
$router->get('pizza-factory', 'PizzaFactory@index');
$router->get('choc-o-holic', 'ChocOHolic@index');
$router->get('remote-control', 'RemoteControl@index');
$router->get('adapter', 'Adapter@index');
$router->get('template', 'TemplateMethod@index');
$router->get('iterator', 'Iterator@index');
$router->get('state', 'State@index');
