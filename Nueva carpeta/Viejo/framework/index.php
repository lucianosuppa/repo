<?php

require 'ControllerInterface.php';
require 'ControllerName.php';
require 'ControllerDate.php';
require 'ControllerEmail.php';

$dato = new ControllerName;
$date = new ControllerDate;
$email = new ControllerEmail;
$controladores = array($dato, $date, $email);

foreach ($controladores as $a)
{
    var_dump ($a);
}
?>