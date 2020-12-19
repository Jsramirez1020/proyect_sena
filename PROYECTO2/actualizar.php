<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="proyecto.css">
	
</head>
<body>
	<form action="actualizarusuario.php" method="POST">
				<div class="sign-up-htm">
					<div class="group">
						<label for="user" class="label">Usuario</label>
						<input id="user" type="text" class="input" name="nombres">
					</div>
					<div class="group">
						<label for="pass" class="label">apellido</label>
						<input id="pass" type="text" class="input" name="apellidos">
					</div>
					<div class="group">
						<label for="pass" class="label">contrasena</label>
						<input id="pass" type="password" class="input" data-type="password" name="clave">
					</div>
					<div class="group">
						<label for="pass" class="label">Direccion Email</label>
						<input id="pass" type="email" class="input" name="email">
					</div>	
					<div class="group">
						<input type="submit" class="button" value="actualizar">
					</div>
				
				</form>
				<form action="eliminar.php" method="POST">
					<div>
						<label for="user" class="label">Borrar Usuario</label>
						<input type="submit" class="button" value="borrar">
					</div>
				</form>
</body>
</html>