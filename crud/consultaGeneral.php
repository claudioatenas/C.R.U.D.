<!doctype html>
<html>
	<head>
	<meta charset="UTF-8">
	</head>

	<body>
		<?php
			$conexion=mysqli_connect("localhost","root","","sabados") or
			    die("Problemas con la conexión");

			$registros=mysqli_query($conexion,"select * 
			                        from usuarios") or
			  die("Problemas en el select:".mysqli_error($conexion));

			while ($reg=mysqli_fetch_array($registros))
			{
			  echo "El Nombre es:".$reg['nombre']."<br>";
			  echo "El apellido es:".$reg['apellido']."<br>";
			  echo "El cedula es:".$reg['cedula']."<br>";
			  echo "El  mail es:".$reg['mail']."<br>";
			  echo "El genero es:".$reg['genero']."<br>";
			  echo "<br><hr><br>";
			  
			  }
			
			mysqli_close($conexion);
		?>
	
	<br>
	<a href="index.php">VOLVER AL MENU</a>
	</body>
</html>