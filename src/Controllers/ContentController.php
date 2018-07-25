<?php
/**
 * Created by PhpStorm.
 * User: Alberto
 * Date: 25.07.2018
 * Time: 10:47
 */

namespace HelloWorld\Controllers;


use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

class ContentController extends Controller
{
    public function sayHello(Twig $twig):string
    {
        return $twig->render('HelloWorld::content.hello');
    }
}