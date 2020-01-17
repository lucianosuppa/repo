<?php

include_once ('cola.php');

class Sharding
{
    private $count = array(0,0,0);
    private $servidores = 1;
    private $c = 0;
    private $dbs = array(
        array(),
        array(),
        array(),
    );

    public function guardar($dni,$persona)
    {
        $posicion = $dni % $this->servidores;
        $this->dbs[$posicion][$dni] = $persona;

        if(!isset($this->count[$posicion]))
        {
            $this->count[$posicion] = 0;
        }

        $this->count[$posicion] += 1;
        
        if ($this->count[$posicion] > 10)
        {
            $this->resharding();
        }
        return $this->dbs;
    }

    public function resharding()
    {
        $cola = new Cola();

        $newDbs = array(
            array(),
            array(),
            array(),
        );

        $this->servidores += 1;
        
        foreach ($this->count as $key=>$value)
        {
            $this->count[$key] = 0;
        }

        foreach ($this->dbs as $key=>$value)
        {
            foreach ($value as $k=>$v)
            {
                $posicion = $k % $this->servidores;
                $anterior = $k % ($this->servidores-1);
                if ($anterior != $posicion)
                {
                    $cola->poner($v);
                }
            }
        }
        return $this->dbs;
    }

    public function migrar()
    {
        //mientras la cola no este vacia
        $newDbs[$posicion][$k] = $v;

        if(!isset($this->count[$posicion]))
                {
                    $this->count[$posicion] = 0;
                }

                $this->count[$posicion] += 1;

                $this->dbs = $newDbs;
    }

    public function contadores()
    {
        return $this->count;
    }

    public function mostrar()
    {
        return $this->dbs;
    }
}

$cola = new Cola();

$shard = new Sharding();
for ($i=0;$i<30;$i++)
{
    $shard->guardar(rand(0,999),'Jose');
}

$i=1;
$j=0;
foreach ($shard->mostrar() as $key=>$value)
{
    if ($shard->contadores()[$key] != 0)
    {
    echo 'En el servidor ' . $i . ' hay ' . $shard->contadores()[$key] . ' personas.' . "\n";
    $j += $shard->contadores()[$key];
    $i++;
    }
}
echo 'Hay en total ' . $j . " personas\n";