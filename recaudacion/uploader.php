<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name = "viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Recaudación y abonos</title>
	<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header><h1>Condominios Qubit</h1></header>
	<?php
	include("controlador.php");
	session_start();
	$fecha = date("Ymd");
	$carpeta = "comprobante/";
	$_FILES['evidencia']['name'] = $_SESSION['rut'].'_'.$fecha.'_'.$_FILES['evidencia']['name'];

	$monto = $_POST['monto'];
	$path = $carpeta.basename( $_FILES['evidencia']['name']);
	$rut = $_SESSION['rut'];
	$mes = $_POST['list'];

	$obj = new Controlador();


	$obj->Guardar($monto, $mes, $path, $rut);


	if(move_uploaded_file($_FILES['evidencia']['tmp_name'], $path)) 
		{
		     print "<h3>Archivo subido con exito</h3>";
		     print '<META HTTP-EQUIV=Refresh CONTENT="1; URL=recaudacion.php">';
		} 
		else
		{
			print "<h3>Ha ocurrido un error, intente nuevamente</h3>";
			print '<META HTTP-EQUIV=Refresh CONTENT="1; URL=recaudacion.php">';
		}
	?>
		
</body>
</html>


