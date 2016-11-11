<?php 
class Controlador {
	public $tabla;
	public $lectura;
	public $mes;
	public $path;
	public $rut;

	function conecta(){
		$hostname = "localhost";
		$database = "condominios";
		$username = "root";
		$password = "";

		try {
			$conexion = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password);
			return $conexion;
		}
		catch (PDOException $e) {
			print "Error: " . $e->getMessage() . "";
			exit();
		}

	}


	public function Guardar($tabla, $lectura, $mes, $path, $rut){
		$this->tabla = $tabla;
		$this->lectura = $lectura;
		$this->mes = $mes;
		$this->path = $path;
		$this->rut = $rut;

		$conexion = self::conecta();

		$consulta = "INSERT INTO $tabla VALUES (:lectura, :mes, :path, :rut)";


		$resultado = $conexion->prepare($consulta);
		$resultado->execute(array(':lectura'=>$lectura, ':mes'=>$mes, ':path'=>$path, ':rut'=>$rut));

		if($resultado){
			return true;
		}else{
			return false;
		}

	}
}

 ?>