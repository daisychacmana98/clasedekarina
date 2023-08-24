<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" href="formularios.css" type="text/css">
</head>

<body>
<?php
$log = $_POST["log"];
$pas = $_POST["pas"];
$nom = $_POST["nom"];
$ape = $_POST["ape"];
$dir = $_POST["dir"];
$tel = $_POST["tel"];
$ema = $_POST["ema"];

$msg = ""; // Initialize $msg with an empty string

// Check if login is not empty
if (trim($log) !== '') {
    // TODO: Replace the deprecated MySQL functions with MySQLi or PDO
    require_once("conecta.php");

    $sql = "SELECT * FROM cliente WHERE login='$log'";
    $res = mysqli_query($connection, $sql);
    if (!$res) {
        die("Query failed: " . mysqli_error($connection));
    }

    if (mysqli_num_rows($res) == 0) {
        $msg = "<tr><th colspan='2'>Es un registro de cliente válido</th></tr>";
    } else {
        $msg = "<tr><th colspan='2'>El login del cliente ya está registrado</th></tr>";
    }


}
?>
    	

<marquee bgcolor="#CCCCCC">BIENVENIDOS AL REGISTRO DE CLIENTES</marquee>
<form action="cliente.php" method="post"> <table align="center"> <tr> 
		<th colspan='2'><h1>DATOS DEL CLIENTE</h1></th> </tr> <tr> 
			<th>Login:</th> <td>
				<input type="text" name="log"></td> </tr> <tr> 
			<th>Password:</th> <td>
				<input type="password" name="pas"></td> </tr> <tr> 
			<th>Nombres:</th> <td>
				<input type="text" name="nom" size="50"></td> </tr> <tr> 
			<th>Apellidos:</th> <td>
				<input type="text" name="ape" size="50"></td> </tr> <tr> 
			<th>Direccion:</th> <td>
				<input type="text" name="dir" size="50"></td> </tr> <tr> 
			<th>Telefono:</th> <td>
				<input type="text" name="tel"></td> </tr> <tr> 
			<th>Email:</th> <td>
				<input type="text" name="ema" size="35"></td> </tr> <tr> 
			<th colspan='2'>
	<input type="submit" value="Grabar"> </th> </tr> 
	<?php 
	echo $msg;
        ?>
    </table>
</form>
</body>
</html>
