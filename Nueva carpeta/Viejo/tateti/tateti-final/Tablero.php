<?php


Class Tablero 

{
    private $tablerotab = array();
    private $x;
    private $y;
    private $a;
    private $b;
    private $marca;
    private $ar = array ();
    private $lleno;

    public function marcar($x,$y,$jugador)
    {
        return $jugador->dameMarca();
    }

    public function damePosicion($x,$y)
    {
        return $this->tablerotab[$x][$y];
    }

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function mostrar ()
    {
        for($i=0;$i<$this->x;$i++)
        {
            for($j=0;$j<$this->y;$j++)
            {
                $this->tablerotab[$i][$j] = 9;
                echo $this->tablerotab[$i][$j] . " - ";
            }
            echo "\n";
        }
        return $this->tablerotab;
    }

    public function lleno()
    {
        for($i=0;$i<$this->x;$i++)
        {
            for($j=0;$j<$this->y;$j++)
            {
                if ($this->tablerotab[$i][$j] == 9)
                {
                    return $this->lleno = false;
                }
            }
        }
        return $this->lleno = true;
    }
}