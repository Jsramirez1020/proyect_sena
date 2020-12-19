<?php
echo '<link rel="stylesheet" href="proyecto.css">';
  include("coneccion.php");
  session_start();
  	$con=mysql_connect($host,$user,$pw)
  	or die ("problemas al conectar server");

  	mysql_select_db($db,$con)
  	or die("problemas al conectar db");
  	$reg=mysql_query("SELECT clave FROM usuarios WHERE clave='$_POST[Clave]'",$con);

  	if($re=mysql_fetch_array($reg))
  	{
  		mysql_query("DELETE FROM usuarios WHERE clave='$_POST[Clave]'",$con);
  		echo "datos eliminados";
      echo "<form action='index.html'><input type='submit' value='REGRESAR A PAGINA PRINCIPAL'>";
  	}
  ?>
  </body>
</html>
