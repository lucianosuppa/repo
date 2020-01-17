<?php

interface DroneInterface
{
  public function __construct($tamanioTanque);

  public function cantidadDeBateria();

  public function mover($x, $y);

  public function historial();
}