<?php

class Tateti
{
    private $jugadores = array ();
    private $tablerotateti = array();

    public function __construct(string $jugador1,string $jugador2)
    {
        $this->jugadores[] = $jugador1;
        $this->jugadores[] = $jugador2;
        $tablerotateti = new Tablero(3,6);
        $this->tablerotateti = $tablerotateti;
    }

    public function jugar($x,$y)
    {
        return $this->tablerotateti();
    }

    public function ganador()
    {
        return $this->tablerotateti();
    }
}

class Tablero
{
    private $tablero = array();
    private $x;
    private $y;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;

        for ($i=0; $i < $this->x; $i++) {
             
            for ($j=0; $j < $this->y; $j++) {
                $this->tablero[$i][$j]=9;
            }
        }
    }

    public function marcar($x,$y,$jugador)
    {
        $this->tablero[$x][$y] = $jugador->damePosicion();
    }

    public function damePosicion ($x,$y)
    {
        $this->x = rand(0,$this->x-1);
        $this->y = rand(0,$this->y-1);
        return $this->tablero[$x][$y];
    }

    public function mostrar ()
    {
        for($i=0;$i<$this->x;$i++)
        {
            for($j=0;$j<$this->y;$j++)
            {
                echo $this->tablero[$i][$j] . " - ";
            }
            echo "\n";
        }
        return $this->tablero;
    }

    public function lleno ()
    {
        foreach ($tablero as $value)
        {
            if ($value == 9)
            {
                return $value;
            }
        }
    }
}

class jugador
{
    private $nombre;
    private $marca;

    public function __construct (string $nombre,string $marca)
    {
         $this->nombre = $nombre;
         $this->marca = $marca;
    }

    public function dameNombre()
    {
        return $this->nombre;
    }

    public function dameMarca()
    {
        return $this->marca;
    }
}

//$tateti = new Tateti('j2','j1');
$tablero = new Tablero(3,4);
//$Jugador = new Jugador();


var_dump ($tablero->mostrar());