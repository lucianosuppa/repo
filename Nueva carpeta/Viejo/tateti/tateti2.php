<?php

const LIBRE = '';
const CIRCULO = 'O';
const CRUZ = 'X';

$ar = array();
$ar [] = array (9,9,9);
$ar [] = array (9,9,9);
$ar [] = array (9,9,9);


// Mientras no haya ganador o este lleno:
    //       buscar posicion al azar
    //       si esta ocupado empezar de nuevo
        //empezar de nuevo
        //       sino, escribo posicion del jugador



echo '<pre>';
foreach ($ar as $value)
{
    echo $value[0] . " - " . $value[1] . " - " . $value[2] . "\n";
}
echo '</pre>';