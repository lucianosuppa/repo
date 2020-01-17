<?php

require 'jugador.php';
require 'Tablero.php';

class Tateti
{
    private $ganador = false;
    private $tablero = array ();
    private $jugador1;
    private $jugador2;

    public function __construct($jugador1,$jugador2)
    {
        $tablero = new Tablero(3,6);
        $this->tablero = $tablero;
        $jugador1 = new Jugador('Jugador1','X');
        $this->jugador1 = $jugador1;
        $jugador2 = new Jugador ('Jugador2','O');
        $this->jugador2 = $jugador2;
    }

    public function jugar($x,$y)
    {
        while ($this->tablero->lleno() == false || $this->ganador() == false)
        {
            $this->tablero->marcar($x, $y, $this->jugador1);
            $this->tablero->mostrar();
            $this->ganador = true;
        }

    }

    public function ganador()
    {
        for($i=0;$i<$this->x;$i++)
        {
            for($j=0;$j<$this->y;$j++)
            {
                if ($ != 9)
                {
                    if ($this->tablero[$i][$j] == $this->tablero[$i+1][$j] && $this->tablero[$i+1][$j] == $this->tablero[$i+2][$j])
                    {
                        return true;
                    }
                    if ($this->tablero[$i][$j] == $this->tablero[$i][$j+1] && $this->tablero[$i][$j+1] == $this->tablero[$i][$j+2])
                    {
                        return true;
                    }
                }
            }
        }
        return false;
    }
}

$tateti = new Tateti('j1','j2');
echo $tateti->jugar(2,2);