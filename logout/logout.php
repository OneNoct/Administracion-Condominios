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
	session_start();

	if(isset($_SESSION['user'])){
	    
	    session_destroy();
	    print '<label>Finalizando sesion...</label>';
	    print '<img src="../images/load.gif">';
	    print '<META HTTP-EQUIV=Refresh CONTENT="2; URL=../registroCopropietario/index.php">';
	    
	}else{
	    
	    print "<label>Error, debe validarse como usuario</label>";
	    print '<img src="../images/error.png">';
        print '<META HTTP-EQUIV=Refresh CONTENT="1; URL=../login/login.php">';
	}

	?>

</body>
</html>