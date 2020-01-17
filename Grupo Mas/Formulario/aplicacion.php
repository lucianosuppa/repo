<?php

include ("seguridad.php");

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Formulario Registro</title>
</head>
<body>
    <form method="post" action="mostrardatosenpagina.php">
<input type="tipodedato" name="nombredelcampo" value="Escribe Aquí" size="20" maxlengh="20" />
<input type="text" name="nombredelcampo" value="Valor por defecto" size="20" maxlength="20" >
<input type="password" name="nombredelcampo" value="Valor por defecto" size="20" maxlengh="20" />
<INPUT type="radio" name="mibotondeopcion" checked value="1">Estudiante<br />
<INPUT type="radio" name="mibotondeopcion" value="2">Astronauta<br />
<INPUT type="radio" name="mibotondeopcion" value="3">Médico<br />
<INPUT type="radio" name="mibotondeopcion" value="4">Webmaster<br>
<input type="file" name="imagendemilogotipo" accept="image/*.gif ">
    
    <input type="checkbox" name="micasilladeverificacion" checked value="1" />Estudiante<br />
<input type="checkbox" name="micasilladeverificacion" value="2" />Astronauta<br />
<input type="checkbox" name="micasilladeverificacion" value="3" />Médico<br />
<input type="checkbox" name="micasilladeverificacion" checked value="4" />Webmaster<br />
    
    <select name="comidapreferida" size=1>
  <option value="tortilla">Las tortillas</option>
  <option value="paella">La paella</option>
  <option value="pizza">Las pizzas</option>
</select>
    
    <textarea rows="10" cols="20" wrap="soft">Texto que aparece ya escrito de antemano</textarea>
    
    <input type="submit" value="Botón de envio estandar" name="Enviar la información al servidor" />
</form>
	<div id="content">
		<h1>Registro de Usuarios</h1>
		<form action="ingreso.php" method="POST">
	        <table border="1">
		        <tr>
		            <td><label>Usuario</label></td>
		            <td><input type="text" name="usuariouser" placeholder="Usuario" required/></td>
		        </tr>
		        <tr>
		            <td><label>Contraseña</label></td>
		            <td><input type="text" name="contraseniasuser" placeholder="Contraseña" required/></td>
		        </tr>
		        <tr>
		            <td><label><input type="submit" value="Registrarme"></input></label> </td>
		            <td><label><input type="reset" value="Reestablecer"></input></label></td>
		        </tr>
		</form>
	</div>
</body>
</html>