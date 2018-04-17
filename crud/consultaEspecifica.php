<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<input type="text" name="Buscar">;
		<input type="submit" value="Buscar">;


		<?php
			$conexion=mysqli_connect("localhost","root","","sabados") or
			    die("Problemas con la conexión");

			$registros=mysqli_query($conexion, "select * from usuarios where cedula='$_POST[datoBuscar]' ") or die("Problemas en el select:".mysqli_error($conexion));


			if ($reg=mysqli_fetch_array($registros))
			{
			  echo "el nombre es: ".$reg['nombre']."<br>";
			  echo "el apellido es: ".$reg['apellido']."<br>";
			  echo "la cedula es: ".$reg['cedula']."<br>";
			  echo "el mail es: ".$reg['mail']."<br>";
			  echo "el genero es: ".$reg['genero']."<br>";
			  
			}
			else
			{
			  echo "No existe un usuario con esa cédula.";
			}
			mysqli_close($conexion);

		
		?>
		
			<br>
		<a href="index.php">VOLVER AL MENU</a>
			<br>
		
	</form>
</body>
</html>