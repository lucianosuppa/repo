<?php

function generarMazo() {
  $mazo = array(1,2,3,4,5,6,7,8,9,10,11,12,
                1,2,3,4,5,6,7,8,9,10,11,12,
                1,2,3,4,5,6,7,8,9,10,11,12,
                1,2,3,4,5,6,7,8,9,10,11,12);
  return $mazo;
}

function mezclarCartas(&$mazo) {
    shuffle($mazo);
  }

function dameCartasDelMedio(&$mazo) {
  $manoDelMedio = array (array_pop($mazo), array_pop($mazo));
  return $manoDelMedio;
}

function dameCartasJugador(&$mazo) {
  $manoJugador = array (array_pop($mazo), array_pop($mazo));
  return $manoJugador;
}

function cuantasEscobas($manoDelMedio, $manoJugador) {

$puntos =0;
  if ($manoDelMedio[0] + $manoDelMedio[1] + $manoJugador[0] == 15)
  {
    $puntos ++;
  }
  if ($manoDelMedio[0] + $manoDelMedio[1] + $manoJugador[1] == 15)
  {
    $puntos ++;
  }
  if ($manoJugador[0] + $manoJugador[1] + $manoDelMedio[0] == 15)
  {
    $puntos ++;
  }
  if ($manoJugador[0] + $manoJugador[1] + $manoDelMedio[1] == 15)
  {
    $puntos ++;
  }
  if ($manoDelMedio[0] + $manoJugador[0] == 15)
  {
    $puntos ++;
  }
  if ($manoDelMedio[0] + $manoJugador[1] == 15)
  {
    $puntos ++;
  }
  if ($manoDelMedio[1] + $manoJugador[0] == 15)
  {
    $puntos ++;
  }
  if ($manoDelMedio[1] + $manoJugador[1] == 15)
  {
    $puntos ++;
  }
   return $puntos;
}

$mazo = generarMazo();
mezclarCartas($mazo);
$puntos = 0;

while (!empty($mazo)) { // mientras haya cartas en el mazo
    $cartasMedio = dameCartasDelMedio($mazo);
    $manoJugador = dameCartasJugador($mazo);
    $puntos += cuantasEscobas($cartasMedio, $manoJugador);
}

echo "El jugador termino con: " . $puntos . " puntos.";