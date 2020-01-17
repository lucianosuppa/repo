<?php

class CuantosMovimientos
{

  private $bateria=0;
  private $tamanioTanque;
  private $_historial = array();
  private $total;
  private $poscicionX=0;
  private $poscicionY=0;

  public function __construct($tamanioTanque) 
  {
    $this->bateria = $tamanioTanque;
    $this->tamanioTanque = $tamanioTanque;
  }

  public function cantidadDeBateria() 
  {
    return $this->bateria;
  }


  public function mover($x, $y) 
  {
    $naftaAGastar = abs($this->poscicionX - $x) + abs($this->poscicionY - $y);

    if ($naftaAGastar > $this->bateria) 
    {
      return false;
    }
    $this->bateria = $this->bateria - $naftaAGastar;

    if ($x == 0 && $y == 0) 
    {
      $this->bateria = $this->tamanioTanque;
    }
    $this->total += 1;
    $this->_historial[] = array('x' => $x, 'y' => $y);
    $this->poscicionX = $x;
    $this->poscicionY = $y;

    return true;
  }

  public function historial() 
  {
    return $this->_historial;
  }

  public function mostrarEstadistica()
  {
      return $this->total;
  }
}