<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$conexion=mysqli_connect("localhost", "root", "", "sabados") or die ("problemas con la conexion");

		mysqli_query($conexion, "delete from usuarios") or die ("Problemas en el select:".mysqli_error($conexion));

		echo "Se efectuo el borrado de todos los usuarios.";
		mysqli_close($conexion);

	 ?>
</body>
</html>