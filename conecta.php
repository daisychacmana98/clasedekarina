<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php $myconn = mysqli_connect("localhost","root",""); 
	if (!$myconn) { 
		echo "Error al intentar conectarse con el servidor MySQL"; 
		exit(); 
	} 

	//conectamos con la base de datos deseada 
	if (!mysqli_select_db($myconn, "ventas")) { 
		echo "No se pudo conectar correctamente con la Base de datos"; 
		exit(); 
		} 
		?>
</body>
</html>