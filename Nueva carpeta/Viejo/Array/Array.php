<?php

$meses = array (
    "Enero" => 9,
    "Febrero" => 12,
    "Marzo" => 0,
    "Abril" => 17, 
);

foreach ($meses as $key=>$value)
{
    if ($value > 0)
    {
        echo $value . " , ";
    }
}


$notas = array (
    "Alumno 1"=>array (1, 7, 8), 
    "Alumno 2"=>array (3, 5, 7), 
    );
$notaAlta = 0;

foreach ($notas as $key=>$value)
{
    foreach ($value as $v)
    {
        if ($v > $notaAlta)
        {
            $notaAlta = $v;
            $alumno = $key;
        }
    }
}
echo $notaAlta . ' del ' . $alumno;

$clientes = array(
    "telefono" => array (426042,453643,246435),
    "direccion" => array ('asr32', 'gc74', 'ar23'),
    "nombre" => array ('asd', 'gtd', 'skh'),
);

foreach ($clientes as $key=>$value)
{
    foreach ($key as $v)
    {
        if ($v == 'asd')
        {
            var_dump ($key[$v]);
        }
    }
}