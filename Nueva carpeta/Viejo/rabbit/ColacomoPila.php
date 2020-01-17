<?php

class Pila
{
    private $coleccion = array();
    private $elemento;
    
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

class Cola
{
    private $pila1;
    private $pila2;
    
    public function __construct ()
    {
        $this->pila1 = new pila();
        $this->pila2 = new pila();
    }

    public function getPila1()
    {
        return $this->pila1;
    }

    public function getPila2()
    {
        return $this->pila2;
    }

    public function encolar($elemento)
    {
        $this->pila1->apilar($elemento);
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
}

//$cola->getPila1()->apilar(7);
//$cola->getPila1()->apilar(6);
//$cola->getPila1()->apilar(5);
//$cola->getPila1()->apilar(4);
//$cola->getPila1()->apilar(3);
//$cola->getPila1()->desapilar(); //saca el 7
//$cola->getPila1()->desapilar(); //saca el 6
//$cola->getPila1()->apilar(7); // agrega el 7 al final de la lista 
//var_dump ($cola->getPila1());