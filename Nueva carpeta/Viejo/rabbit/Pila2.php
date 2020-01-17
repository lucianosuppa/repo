<?php

class Pila
{
    private $coleccion = array ();
    private $size;
    private $elemento;
    
    public function __construct (array $coleccion,int $size)
    {
        $this->coleccion = $coleccion;
        $this->size = $size;
    }

    public function desapilar()
    {
        if (sizeof($this->coleccion) == 0)
        {
        return $this->elemento = Array_shift($this->coleccion);
        }
    }

    public function apilar($elemento)
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