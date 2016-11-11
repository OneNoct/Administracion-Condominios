<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name = "viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Login</title>
	<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header><h1>Condominios Qubit</h1></header>
<?php

include("controlador.php");
$rut = $_POST['rut'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$phone = $_POST['phone'];
$cellphone = $_POST['cellphone'];
$npropiedad = $_POST['npropiedad'];

$obj = new Controlador();

$final = $obj->Insert($rut, $name, $lastname, $email, $user, $pass, $phone, $cellphone, $npropiedad);

if ($final == true) {
	print '<h2>insertado con exito</h2>';
	print '<META HTTP-EQUIV=Refresh CONTENT="2; URL=../registroCopropietario/index.php">';
}else{
	print '<h2>falla al insertar</h2>';
}

?>

</body>
</html>