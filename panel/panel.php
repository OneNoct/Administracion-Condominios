<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name = "viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Bienvenido</title>
	<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png">
	<link rel="stylesheet" href="ztyle.css">
</head>
<body>
	<header><h1>Condominios Qubit</h1></header>

	<?php
        session_start();
        if( isset($_SESSION['user']) ){
            print '<section>
		<div class="opciones">
			<a href="../registroMedidor/registrom.php">Registro Medidor</a>
		</div>
		<div class="opciones">
			<a href="../cobros/cobrosRut.php">Cobros mes actual</a>
		</div>
		<div class="opciones">
			<a href="../recaudacion/recaudacion.php">Recaudación y abonos</a>
		</div>
		<div class="opciones">
			<a href="../logout/logout.php">Logout</a>
		</div>
	</section>';
            
        }else{            
            print "<label>Error, debe validarse como usuario</label>";
	    	print '<img src="../images/error.png">';
        	print '<META HTTP-EQUIV=Refresh CONTENT="1; URL=../login/login.php">';   
        }        
        ?>
	
</body>
</html>