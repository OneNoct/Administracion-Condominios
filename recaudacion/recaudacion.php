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
	<script type="text/javascript" src="validaciones.js"></script>
	<header><h1>Condominios Qubit</h1></header>
	
	<?php

        session_start();
        if( isset($_SESSION['user']) ){
            print '<form enctype="multipart/form-data" method="POST" action="uploader.php" onsubmit="return validaCampos()">
		<h2>Gastos Comunes:</h2>
		<label for="rut">Rut:</label>
		<input type="text" id="rut" name="rut" value="'.$_SESSION['rut'].'" readonly>
		<label>Seleccione mes de pago:</label>
		<select name="list" id="list">
			<option value="1">Enero</option>
			<option value="2">Febrero</option>
			<option value="3">Marzo</option>
			<option value="4">Abril</option>
			<option value="5">Mayo</option>
			<option value="6">Junio</option>
			<option value="7">Julio</option>
			<option value="8">Agosto</option>
			<option value="9">Septiembre</option>
			<option value="10">Octubre</option>
			<option value="11">Noviembre</option>
			<option value="12">Diciembre</option>
		</select>
		<input type="number" id="monto" name="monto" placeholder="Ingrese Monto cancelado" onchange="return validaNum()">
		<label for="evidencia">Adjunte Imagen:</label>
		<input id="evidencia" name="evidencia" type="file" size="2mb">
		<input type="submit" value="Guardar"></input>
		<input type="button" value="Volver" onclick="history.back()">
	</form>';
            
        }else{            
            print "<h3>Error, debe validarse como usuario</h3>";
	    	print '<img src="../images/error.png">';
        	print '<META HTTP-EQUIV=Refresh CONTENT="1; URL=../login/login.php">';  
        }       
    ?> 

	
</body>
</html>