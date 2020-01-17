<?php

class Buscaminas
{
   private $minas = array();

    public function __construct($ancho,$largo)
    {
        for (i = 0; i<$ancho;$i++)
        {
            for (j = 0; j<$ancho;$j++)
            {
                $this->minas[$i][$j] = "X";
            }
        }
    }

    public function agregarMina($x, $y)
    {

    }

    public function jugar($x, $y)
    {

    }

    public function terminoDeJugar()
    {

    }

    public function gano()
    {

    }

    public function sacarMina($x, $y)
    {

    }


}
