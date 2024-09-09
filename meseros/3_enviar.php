<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>AleX</title>
</head>

<body>
<?php 

$nombre = $_POST['nombre']; 
$email = $_POST['email'];
$direccion = $_POST['direccion']; 
$telefono = $_POST['telefono'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
$header .= 'From: ' . $email . " rn"; 
$header .= "X-Mailer: PHP/" . phpversion() . " rn"; 
$header .= "Mime-Version: 1.0 rn"; 
$header .= "Content-Type: text/plain"; 

$mensaje .= "Este mensaje fue enviado por " . $_POST["nombre"] . " rn"; 
$mensaje .= "Su e-mail es: " . $_POST["email"] . " rn"; 
$mensaje .= "Direccion: " . $_POST['direccion'] . " rn"; 
$mensaje .= "Telefono: " . $_POST['telefono'] . " rn";
$mensaje .= "Asunto: " . $_POST["asunto"] . " rn"; 
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " rn";
$mensaje .= "Telefono: " . $_POST['telefono'] . " rn";  
$mensaje .= "IP: " . $_SERVER["REMOTE_ADDR"] . "\rn";
$mensaje .= "Enviado el " . date('d/m/Y', time()); 

$para = 'info@directoslp.com'; 
$asunto = 'Contacto desde AleX'; 

mail($para, $asunto, utf8_decode($mensaje), $header); 

//echo 'estatus=OK En AleX te damos las Gracias'; 
header( "Status: 301 Moved Permanently", false, 301);
header( 'Location: http://directoslp.com/alex.html' );
exit();
?> 
<!--<FORM NAME="buttonbar">
<INPUT TYPE="button" VALUE="Volver a AleX" onClick="history.back(-1)"  align="center">
</FORM> 
<input name="reset" type="reset" value="Borrar información" /> -->
</body>
</html>
