<?php

class Pila
{
    private $coleccion = array();
    
    public function __construct ()
    {
        $this->coleccion = array ();
    }

    public function apilar($elemento)
    {
        //$this->elemento = $elemento; 
        $this->coleccion[] = $elemento;
    }

    public function desapilar()
    {
        if (sizeof($this->coleccion) > 0)
        {
            Array_shift($this->coleccion);
        }
    }
}