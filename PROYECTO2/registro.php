<?php  
include("conexionsession.php");
if (isset($_POST['nombres']) && !empty($_POST['nombres']) && 
     isset($_POST['apellidos']) && !empty($_POST['apellidos']) &&
     isset($_POST['clave']) && !empty($_POST['clave']) &&
     isset($_POST['email']) && !empty($_POST['email'])) 
{
	$nombres=($_POST['nombres']);
	$apellidos=($_POST['apellidos']);
	$clave=($_POST['clave']);
	$email=($_POST['email']);

	$con=mysql_connect($host,$user,$pw) or die ("tenemos problemas al conectar");
	mysql_select_db($db,$con) or die ("problemas al conectar con la base de datos");
	mysql_query("INSERT INTO usuarios(nombres,apellidos,clave,email)VALUES('$_POST[nombres]','$_POST[apellidos]','$_POST[clave]', '$_POST[email]')",$con) or die("nooooo");
	echo "datos insertados gracias";
	session_start();
	$_SESSION['name']=$nombres;
	header('location:about.php');
	
}else
{
	echo "problemas al registrarse";
}



?>