<?php

require 'Pila.php';

class Cola
{
    private $coleccion;
    private $size;
    private $elemento;
    private $pila1;
    private $pila2;
    
    public function __construct ()
    {
        $this->coleccion = array();
        $this->pila1 = new pila;
        $this->pila2 = new pila;
    }

    public function desencolar()
    {
        while (!empty($this->pila1))
        {
        $this->pila2->apilar($this->pila1->desapilar());
        }
        while (!empty($this->pila2))
        {
        $this->pila1->apilar($this->pila2->desapilar());
        }
    }

    public function encolar($elemento)
    {
        $this->pila1->apilar($elemento);
    }

    public function verPrimero()
    {
        return $this->coleccion[0];
    }

    public function verTamaño()
    {
        return sizeof($this->coleccion);
    }

    public function isEmpty()
    {
        if (sizeof($this->coleccion) === 0)
        {
            return $this->coleccion = false;
        }
    }
}