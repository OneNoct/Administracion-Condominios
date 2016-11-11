<?php 
class Controlador {
	public $monto;
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


	public function Guardar($monto, $mes, $path, $rut){
		$this->monto = $monto;
		$this->mes = $mes;
		$this->path = $path;
		$this->rut = $rut;

		$conexion = self::conecta();

		$consulta = "INSERT INTO tbl_recaudacion VALUES (:monto, :mes, :path, :rut)";


		$resultado = $conexion->prepare($consulta);
		$resultado->execute(array(':monto'=>$monto, ':mes'=>$mes, ':path'=>$path, ':rut'=>$rut));

		if($resultado){
			return true;
		}else{
			return false;
		}

	}

}

 ?>