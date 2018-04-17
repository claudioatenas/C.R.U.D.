<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
		$conexion=mysqli_connect("localhost", "root","", "sabados") or die ("Problemas en la conexion");
		mysqli_query($conexion,"insert into usuarios(nombre, apellido, cedula, mail, genero) values

		('$_POST[nombre]','$_POST[apellido]','$_POST[cc]','$_POST[mail]','$_POST[genero]')")
					or die ("Problemas en el select".mysqli_error($conexion));

				mysqli_close($conexion);

				echo "el usuario fue ingresado.";

	?>
	
	<br>
	<a href="index.php">VOLVER AL MENU</a>
</body>
</html>