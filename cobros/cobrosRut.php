<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name = "viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Cobros</title>
	<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png">
	<link rel="stylesheet" href="ztyle.css">
</head>
<body>
	<header><h1>Condominios Qubit</h1></header>
	<?php
        session_start();
        if( isset($_SESSION['user']) ){

        include("controlador.php");

        $rut =$_SESSION['rut'];
        $mes = date("n");
        $mesant = (date("n")-1);

        $obj = new Controlador();

        $especial = $obj->Especiales($rut, $mes);//cobros especiales

        $luzac = $obj->LuzActual($rut, $mes); //lectura mes actual
        $luzan = $obj->LuzAnterior($rut, $mesant);//lectura mes anterior

        $aguaac = $obj->AguaActual($rut, $mes); //lectura mes actual
        $aguaan = $obj->AguaAnterior($rut, $mesant);//lectura mes anterior

        $valor = 150; //inventado para darle precio a la luz y agua
        $luz = ($luzac - $luzan) * $valor;

        $agua = ($aguaac - $aguaan) * $valor;

            print '<form>
		<h2>Cobros mes actual:</h2>
		<label for="rut">Rut:</label>
		<input type="text" id="rut" name="rut" value="'.$_SESSION['rut'].'" readonly>
		<label for="Especiales">Cobros Especiales:</label>
		<input type="text" id="especiales" name="especiales" value="'.$especial.'" readonly>
		<label for="luz">Deuda Luz:</label>
		<input type="text" id="luz" name="luz" value="'.$luz.'" readonly>
		<label for="agua">Deuda Agua:</label>
		<input type="text" id="agua" name="agua" value="'.$agua.'" readonly>
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