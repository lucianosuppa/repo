<?php

include './Drone.php';
include './DroneInterface.php';
include './DroneAplicacion.php';
include './CuantosMovimientos.php';

$drone = new Drone(100);

$cuantosMovimientos = new CuantosMovimientos($drone);

DroneAplicacion($cuantosMovimientos);

echo 'hay ' . $cuantosMovimientos->mostrarEstadistica() . ' movimientos' . "\n";


//$billeteradecorator = new BilleteraDecorator($drone);
//$quinientos = new ContarBilletes500($drone);
//$agregados = new CuantosBilletesSeAgregan($drone);
//$arriba50 = new BilletesArribaDe50($drone);
//
//programa_secreto($billeteradecorator);
//programa_secreto($quinientos);
//programa_secreto($agregados);
//programa_secreto($arriba50);
//
//echo 'hay ' . $billeteradecorator->mostrarEstadistica() . ' billetes en total en la billetera.' . "\n";
//echo 'hay ' . $quinientos->mostrarEstadistica() . ' billetes de 500 en total.' . "\n";
//echo 'se agregaron ' . $agregados->mostrarEstadistica() . ' billetes en total.' . "\n";
//echo 'hay ' . $arriba50->mostrarEstadistica() . ' billetes por encima de $50.' . "\n";