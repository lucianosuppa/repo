<html> 
<head> 
<title>Grupo Mas</title> 
</head> 
<body> 
<h1 align="center">Ingreso</h1> 
<form action="control.php" method="POST"> 
<table align="center" width="225" cellspacing="2" cellpadding="2" border="0"> 
<tr> 
<td colspan="2" align="center" 

<?php
    
if (isset($_GET["errorusuario"]))
{
    if ($_GET["errorusuario"]=="si")
    { 
    echo "<td colspan='2' align='center' bgcolor=red>";
    echo "<span style='color:ffffff'><b>Datos incorrectos</b></span></td>"; 
    } else { 
    echo "<td colspan='2' align='center' bgcolor=green>";
    echo "<span style='color:ffffff'><b>Introduce tu clave de acceso</b></span></td>"; 
    }
} else {
echo "<td colspan='2' align='center' bgcolor=green>";
echo "<span style='color:ffffff'><b>Introduce tu clave de acceso</b></span></td>"; 
}
?>


</tr> 
<tr> 
<td align="right">Usuario:</td> 
<td><input type="Text" name="usuario" size="10" maxlength="50"></td> 
</tr> 
<tr> 
<td align="right">Contraseña:</td> 
<td><input type="password" name="contrasena" size="10" maxlength="50"></td> 
</tr> 
<tr> 
<td colspan="2" align="center"><input type="Submit" value="ENTRAR"></td> 
</tr> 
</table> 
</form>
</body> 
</html>