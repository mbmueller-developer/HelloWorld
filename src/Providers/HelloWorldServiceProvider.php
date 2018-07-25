<?php
/**
 * Created by PhpStorm.
 * User: Alberto
 * Date: 25.07.2018
 * Time: 10:43
 */

namespace HelloWorld\Providers;


use Plenty\Plugin\ServiceProvider;

class HelloWorldServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     */

    public function register()
    {

        $this->getApplication()->register(HelloWorldRouteServiceProvider::class);

    }
}