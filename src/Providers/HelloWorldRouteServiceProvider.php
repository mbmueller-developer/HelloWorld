<?php
/**
 * Created by PhpStorm.
 * User: Alberto
 * Date: 25.07.2018
 * Time: 10:44
 */

namespace HelloWorld\Providers;


use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

class HelloWorldRouteServiceProvider extends RouteServiceProvider
{
    public function map(Router $router)
    {

        $router->get('hello','HelloWorld\Controllers\ContentController@sayHello');

    }
}