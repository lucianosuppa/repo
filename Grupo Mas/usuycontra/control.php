<?php

if ($_POST["usuario"]=="lujan" && $_POST["contrasena"]=="grupomas")
{
   	session_start(); 
	$_SESSION["autentificado"]= "SI"; 
	if ($_SESSION["autentificado"] == "SI")
	{
		header ("Location: aplicacion.php?".SID);	
	}
}else {	   
	header("Location: index.php?errorusuario=si"); 
}