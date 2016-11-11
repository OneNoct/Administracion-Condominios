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
	<script type="text/javascript" src="validaciones.js"></script>
	<header><h1>Condominios Qubit</h1></header>
	<?php
        session_start();
        if( isset($_SESSION['user']) ){
            print '<form enctype="multipart/form-data" method="POST" action="uploader.php" onsubmit="return validaCampos()">
		<h3>Lectura Final</h3>
		<input type="number" id="lect" name="lect" placeholder="Ingrese Lectura Final" onchange="return validaNum()">
		<label>Seleccione tipo lectura:</label>
		<input type="radio" id="luz" value="1" name="radiolect" checked="checked">
		<label for="luz" class="radio">Luz</label>
		<input type="radio" id="agua" value="2" name="radiolect">
		<label for="agua" class="radio">Agua</label>
		<label>Seleccione mes de lectura:</label>
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
		<label for="evidencia">Adjunte Imagen:</label>
		<input id="evidencia" name="evidencia" type="file" size="2mb">

		<input class="submit" type="submit" value="Guardar"></input>
		<input type="button" value="Volver" onclick="history.back()">	
	</form>';
            
        }else{            
       	print "<h2>Error, debe validarse como usuario</h2>";
	    print '<img src="../images/error.png">';
        print '<META HTTP-EQUIV=Refresh CONTENT="1; URL=../login/login.php">';
        }        
    ?>
</body>
</html>