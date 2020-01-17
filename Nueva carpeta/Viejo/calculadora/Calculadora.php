<?php

class Calculadora
{
    private $resultado;

    public function suma ($x,$y)
    {
        $this->resultado = $x + $y;
        return $this->resultado;
    }

    public function resta ($x,$y)
    {
        return $this->resultado = $x - $y;
    }

    public function multiplicacion ($x,$y)
    {
        return $this->resultado = $x * $y;
    }

    public function division ($x,$y)
    {
        return $this->resultado = $x / $y;
    }
}

//$calcu = new Calculadora;
//
//echo $calcu->suma(4,2) . "\n";
//echo $calcu->resta(4,2) . "\n";
//echo $calcu->multiplicacion(4,2) . "\n";
//echo $calcu->division(4,2);
