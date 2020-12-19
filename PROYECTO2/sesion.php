<?php  
	session_start();	
	include("conexionsession.php");
if (isset($_POST['nombres'])&& !empty($_POST['nombres'])&& 
	isset($_POST['clave'])&& !empty($_POST['clave'])) 
{
		
	$con=mysql_connect($host,$user,$pw)or die("problema al conectar");
	mysql_select_db($db,$con)or die("prblemas al conectar con la db");
	$nombres=$_POST['nombres'];
	$clave=$_POST['clave'];

	$sel=mysql_query("SELECT nombres,clave FROM usuarios WHERE nombres='$_POST[nombres]'",$con)or die ("no jodas");


	$sesion=mysql_fetch_array($sel);
	if ($_POST['clave']== $sesion['clave']) 
	{
		$_SESSION['name']=$_POST['nombres'];
		echo "ejcucion de entrada exitosa";
		header('location:about.php');
	}
	else
	{
		echo "combinacion error";
	}
}else
{
	echo "por favor llena los dos campos";
}


?>