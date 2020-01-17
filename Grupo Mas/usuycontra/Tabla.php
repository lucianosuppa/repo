<?php

$servidor = "localhost";
$usuario = "id8596843_grupomas@2a02:4780:bad:c0de::13";
$contrasenia = "falconsp";
$baseDeDatos = "propiedades";
$conexion = mysqli_connect( $servidor, $usuario, $contrasenia );

$db = mysqli_select_db( $conexion, $baseDeDatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
$name = $_POST["name"];
$boton1 = $_POST["1"];
$boton2 = $_POST["2"];