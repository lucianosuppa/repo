<?php

session_start();

if (isset($_SESSION["autentificado"])) { 
    $autentificado = $_SESSION["autentificado"]; 
} else { 
    $autentificado = "N"; 
} 

if ($autentificado == "N") { 
   header("Location: index.php"); 
} 
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>FormularioRegistro</title>
</head>
<body>
    <form method="post" action="agregar.php">
        <div id="content">
		<h1>Registro de Propiedades</h1>
		<form action="Tabla.php" method="POST">
		        <tr>
		            <td><label>Nombre :</label></td>
		            <td><input type="text" value="name" name="usuariouser" placeholder="Nombre" required/></td><br><br>
		        </tr>
        </form>
        
        <INPUT type="radio" name="boton" checked value="1">En alquiler<br/></INPUT>
        <INPUT type="radio" name="boton" value="2">En venta<br/><br></INPUT>
        
        Tipo : 
        <select name="tipo" size=1>
            <option value="Departamento">Departamento</option>
            <option value="Casa">Casa</option>
            <option value="Local">Local</option><br><br>
        </select>
            
        <br><br><br>
            
        <form action="ingreso.php" method="POST">
		        <tr>
		            <td><label>Precio : $</label></td>
		            <td><input type="text" name="precio" placeholder="Valor" required/></td><br><br>
		        </tr>
        </form>
        
        <input type="checkbox" name="micasilladeverificacion" checked value="1" />Apta credito<br><br>
        
        Cantidad de ambientes:<br><br>
        <INPUT type="radio" name="mibotondeopcion" checked value="1">1</INPUT>
        <INPUT type="radio" name="mibotondeopcion" value="2">2</INPUT>
        <INPUT type="radio" name="mibotondeopcion" value="3">3</INPUT>  
        <INPUT type="radio" name="mibotondeopcion" value="4">4</INPUT>
        <INPUT type="radio" name="mibotondeopcion" value="5">5</INPUT>
        <INPUT type="radio" name="mibotondeopcion" value="6">6</INPUT>
        <INPUT type="radio" name="mibotondeopcion" value="7">7<br/><br></INPUT>
            
        Cochera<br><br>
        <INPUT type="radio" name="miboton" checked value="1">No<br/></INPUT>
        <INPUT type="radio" name="miboton" value="2">Si<br/><br></INPUT>
        
        Descripción<br><br>
        <textarea rows="10" name="descripcion" cols="20" wrap="soft">Descripción aqui</textarea><br><br>
        
        Adjuntar foto :
        <input type="file" name="imagendemilogotipo" accept="image/*.gif "><br><br>
            
        <input type="submit" value="Cargar información" name="Enviar la información al servidor"/>

    </div>
</form>
</body>
</html>