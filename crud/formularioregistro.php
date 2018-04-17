<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<!-- Desarrolle una base de datos con las siguente informacion de manera que sea manejable por parte de php. 
		Nombres
		apellidos
		Cédula
		Mail
		Genero
	-->
	<form method="post" action="guardaDatos.php">
		<label>Ingrese su nombre</label><br>
		<input type="text" name="nombre" required /><br>

		<label>Ingrese su apellido</label><br>
		<input type="text" name="apellido" required /><br>

		<label>Ingrese su Cédula</label><br>
		<input type="text" name="cc" required /><br>

		<label>Ingrese su Mail</label><br>
		<input type="text" name="mail" required /><br>

		<label>Ingrese su Género</label><br>
		<input type="radio" name="genero" required value="m" /><label>Masculino</label>
		<input type="radio" name="genero" required value="f" /><label>Femenino</label>
		<input type="radio" name="genero" required value="?" /><label>Otro</label><br>

		<input type="submit" value="Guardar">
		<input type="reset" value="limpiar">

	</form>

	<br>
	<a href="index.php">VOLVER AL MENU</a>
	
</body>
</html>