<?php

interface ObjectInterface
{
    public function dameVolumen();
    public function nombre();
    public function mostrar();
}

class Caja implements ObjectInterface
{
    private $volumen;
    private $contenido = array();
    private $nombre;
    private $mostrar;
    private $sacar;

    public function __construct(int $volumen,string $nombre)
    {
        $this->volumen = $volumen;
        $this->nombre = $nombre;
    }

    public function dameVolumen()
    {
        return $this->volumen;
    }

    public function nombre ()
    {
        return $nombre;
    }

    public function mostrar()
    {
        foreach ($this->contenido as $value)
        {
            var_dump ($value);
        }
    }

    public function guardar ($objeto)
    {
        $this->contenido[] = $objeto;
    }

    public function vaciar()
    {
        foreach($this->contenido as $key=>$value)
        {
        $value = '';
        $this->contenido[$key]= $value;
        }
    }

    public function sacar ($objeto)
    {
        foreach ($this->contenido as $key=>$value)
        {
            if ($value == $sacar)
            {
                unset($this->contenido[$key]);
            }
        }
    }
}

class Bici implements ObjectInterface
{
    private $volumen;
    private $nombre;
    private $mostrar;

    public function __construct(int $volumen,string $nombre)
    {
        $this->volumen = $volumen;
        $this->nombre = $nombre;
    }

    public function dameVolumen()
    {
        return $this->volumen;
    }

    public function nombre()
    {
        return $this->nombre;
    }

    public function mostrar()
    {
        $this->mostrar = $this->nombre . ' - ' . $this->volumen;
        return $this->mostrar;
    }

}

class Taza implements ObjectInterface
{
    private $volumen;
    private $nombre;

    public function __construct(int $volumen,string $nombre)
    {
        $this->volumen = $volumen;
        $this->nombre = $nombre;
    }

    public function dameVolumen()
    {
        return $this->volumen;
    }
    
    public function nombre()
    {
        return $this->nombre;
    }

    public function mostrar()
    {
        $this->mostrar = $this->nombre . ' - ' . $this->volumen;
        return $this->mostrar;
    }
}

$cajita = new Caja(1000,'Caja Azul');
$bici = new Bici(100,'playera');
$taza = new Taza(50,'porcelana');

$cajita->guardar($bici);
$cajita->guardar($taza);
echo "\n\n" . $cajita->dameVolumen() - $bici->dameVolumen() . " Queda libre \n\n";
echo $cajita->mostrar() . "\n\n";
$cajita->sacar($bici);
echo $cajita->mostrar() . "\n\n";



//var_dump ($cajita);