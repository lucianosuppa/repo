<?php

include_once 'ControllerInterface.php';

class Router 
{
    private $controladores = array ();

    public function agregarController($url, ControllerInterface $controller)
    {
        $this->controladores [$url] = $controller;
    }

    public function dispatch ($url)
    {
        foreach ($this->controladores as $key=>$value)
        {
            if ($key == $url)
            {
                return $this->controladores[$key];
            }
        }
        return false;
    }
}

