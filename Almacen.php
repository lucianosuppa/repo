<?php


class Almacen 
{
    private $stock= array();
    
    public function compras($productos)
    {
        
    }
}

interface ProductosInterface
{
    public function nombreProducto();
    public function precioProducto();
    public function stockProducto();
}


class Productos implements ProductosInterface
{
    private $nombre;
    private $precio;

    public function __construct(string $nombre, int $precio)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function nombreProducto()
    {
        return $this->nombre;
    }

    public function precioProducto()
    {
        return $this->precio;
    }
}

interface CuentasBancariasInterface
{
    public function dineroDisponible();
}


class CuentasBancarias implements CuentasBancariasInterface
{
    private $dineroDisponible;

    public function __construct (int $dineroDisponible)
    {
        $this->dineroDisponible = $dineroDisponible;
    }

    public function dineroDisponible()
    {
        return $this->dineroDisponible;
    }
}

interface ClientesInterface
{
    public function nombrecliente();
}

class Clientes implements ClientesInterface
{
    private $nombreCliente;

    public function __construct(string $nombreCliente)
    {
        $this->nombreCliente = $nombreCliente;
    }

    public function nombreCliente()
    {
        return $this->nombreCliente;
    }
}

$luciano = new Clientes('Luciano');
$mariano = new Clientes('Mariano');
$agustin = new Clientes('Agustin');
$santiago = new Clientes('Santiago');

$fideos = new Productos('Fideos', 56);
$leche = new Productos('Leche', 45);
$pelota = new Productos('Pelota', 300);
$silla = new Productos('Silla', 3000);
$termo = new Productos('Termo', 1000);

$cuentaAlmacen = new CuentasBancarias(0);
$cuentaLuciano = new CuentasBancarias(3000);
$cuentaMariano = new CuentasBancarias(2000);
$cuentaAgustin = new CuentasBancarias(1000);
$cuentaSantiago = new CuentasBancarias(5000);


$almacen = new Almacen;
$almacen->compras($fideos,$leche,$pelota,$silla,$termo);
$almacen->




