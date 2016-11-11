<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name = "viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Registro Copropietario</title>
	<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<script type="text/javascript" src="validacionez.js"></script>
	<header><h1>Condominios Qubit</h1></header>
	<div class="login">
		<h3>¿Ya eres usuario?</h3>
		<button onclick = "location='../login/login.php'">Entrar</button>
	</div>

    <form method="POST" action="valida.php" onsubmit="return validaCampos()">
		<h2>Registro Nuevo Propietario</h2>
		<!--***************************************************-->
		<label for="rut">Rut:</label>
		<input type="text" id="rut" name="rut" placeholder="Ejemplo: 12345678-9" onchange="return validaRut()">
		<!--***************************************************-->
		<label for="name">Nombre:</label>
		<input type="text" id="name" name="name" placeholder="Ingrese nombre">
		<!--***************************************************-->
		<label for="lastname">Apellido:</label>
		<input type="text" id="lastname" name="lastname" placeholder="Ingrese apellido">
		<!--***************************************************-->
		<label for="email">Email:</label>
		<input type="e-mail" id="email" name="email" placeholder="Ejemplo: alguien@algo.com" onchange="return valEmail()">
		<!--***************************************************-->
		<label for="user">Nombre Usuario:</label>
		<input type="text" id="user" name="user" placeholder="Ejemplo 'canero01' (sólo utilice letras y numeros)">
		<!--***************************************************-->
		<label for="pass">Contraseña:</label>
		<input type="password" id="pass" name="pass" placeholder="Ejemplo 'hola123' (maximo 10 caracteres)">
		<!--***************************************************-->
		<label for="phone">Telefono Fijo:</label>
		<input type="number" id="phone" name="phone" placeholder="Ejemplo: 2759780" onchange="return valTelefono()">
		<!--***************************************************-->
		<label for="cellphone">Celular:</label>
		<input type="number" id="cellphone" name="cellphone" placeholder="Ejemplo: 987124560" onchange="return valCelular()">
		<!--***************************************************-->
		<label for="npropiedad">N° Propiedad:</label>
		<input type="number" id="npropiedad" name="npropiedad" placeholder="N° Dpto o Parcela">
		<!--***************************************************-->
		<input type="submit" value="Guardar"></input>	
	</form>

</body>
</html>