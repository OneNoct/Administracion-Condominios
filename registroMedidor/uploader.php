<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name = "viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Registro Medidor</title>
	<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png">
	<link rel="stylesheet" href="ztyle.css">
</head>
<body>
	<header><h1>Condominios Qubit</h1></header>
	<?php
	include("controlador.php");
	session_start();
	$fecha = date("Ymd");
	$carpeta = "lecturas/";
	$_FILES['evidencia']['name'] = $_SESSION['rut'].'_'.$fecha.'_'.$_FILES['evidencia']['name'];

	if ($_POST['radiolect'] == 1) {
		$tabla = "tbl_medluz";
	}else if ($_POST['radiolect'] == 2) {
		$tabla = "tbl_medagua";
	}
	$lectura = $_POST['lect'];
	$path = $carpeta.basename( $_FILES['evidencia']['name']); 
	$rut = $_SESSION['rut'];
	$mes = $_POST['list'];

	$obj = new Controlador();

	$obj->Guardar($tabla, $lectura, $mes, $path, $rut);



	if(move_uploaded_file($_FILES['evidencia']['tmp_name'], $path)) 
	{
	     print "<h2>Archivo subido con exito</h2>";
	     print '<META HTTP-EQUIV=Refresh CONTENT="1; URL=registrom.php">';
	} 
	else
	{
		print "<h2>Ha ocurrido un error, intente nuevamente</h2>";
		print '<META HTTP-EQUIV=Refresh CONTENT="1; URL=registrom.php">';
	}
	?>
	
</body>
</html>
