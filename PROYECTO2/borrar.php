<?php
include("coneccion.php");
$con=mysql_connect($host,$user,$pw) or die("problemas en el server");

mysql_select_db($db,$con) or die("problemas en bd");
$reg=mysql_query("SELECT CLAVEUS FROM usuarios WHERE NOMBRE='$_POST[nombre]'",$con);

if($re=mysql_fetch_array($reg)) {
	mysql_query("DELETE FROM usuarios WHERE NOMBRES='$_POST[nombres]'",$con);
	echo "datos eliminados";
}
else{
	echo "datos NO eliminados";
}
?>