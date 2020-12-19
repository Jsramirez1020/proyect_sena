<?php
include("coneccion.php");
if (isset($_POST['claveus'])&& !empty($_POST['claveus'])&&
	isset($_POST['clavep'])&& !empty($_POST['clavep'])&&
	isset($_POST['cantidad'])&& !empty($_POST['cantidad'])&&
	isset($_POST['telefono'])&& !empty($_POST['telefono'])&&
	isset($_POST['direccion'])&& !empty($_POST['direccion'])) {

	$cantidad=($_POST['claveus']);
	$telefono=($_POST['clavep']);
	$cantidad=($_POST['cantidad']);
	$telefono=($_POST['telefono']);
	$direccion=($_POST['direccion']);
	


	$con=mysql_connect($host,$user,$pw,$db) or die("problemas al conectar");
	mysql_select_db($db,$con) or die("problemas al conectar la bd");
	mysql_query("INSERT INTO pedidos(claveus,clavep,cantidad,telefono,direccion) VALUES ('$_POST[clavep]','$_POST[claveus]','$_POST[cantidad]','$_POST[telefono]','$_POST[direccion]')",$con) or die("nop");
	header('location:about.php');
	echo "datos insertados";
	// header('location:formulario.html');
	}

else{
	echo "problemas al insertar datos";
}
?>