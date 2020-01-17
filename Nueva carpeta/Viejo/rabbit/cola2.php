<?php

class cola 
{
    private $coleccion = array ();
    private $size;
    private $elemento;
    private $pila1;
    private $pila2;
    
    public function __construct (array $coleccion,int $size)
    {
        $this->coleccion = $coleccion;
        $this->size = $size;
        $this->pila1 = new pila;
        $this->pila2 = new pila;
    }

    public function desencolar()
    {
        if (sizeof($this->coleccion) == 0)
        {
        return $this->elemento = Array_shift($this->coleccion);
        }
    }

    public function encolar($elemento)
    {
        return $this->elemento = array_push($this->coleccion,$this->elemento);
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
$ar = array (1,2,3);
$cola=new Cola($ar,0);
echo $cola->verPrimero() . "\n\n";
//$cola=desencolar