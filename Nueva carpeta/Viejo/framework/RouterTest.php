<?php

require_once('./vendor/autoload.php');
require('./Router.php');
require('./ControllerName.php');

use PHPUnit\Framework\TestCase;

final class RouterTest extends TestCase
{
    public function testExisteAhorcado() 
    {
        $this->assertTrue(class_exists("Router"));
    }

    public function testCreaCorrectamenteElControlador()
    {
        $router = new Router;
        $ControllerName = new ControllerName;
        $router->agregarController('pato',$ControllerName);
        $this->assertequals($ControllerName,$router->dispatch('pato'));
    }
}