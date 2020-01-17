<?php 

function DroneAplicacion(Drone $mover) 
{
    $drone->mover(1,1);
    $drone->mover(2,1);
    $drone->mover(0,1);
    $drone->mover(1,1);
    $drone->mover(1,3);
    $drone->mover(0,0);
    $drone->mover(1,1);
    return $drone;
}