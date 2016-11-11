<?php 
class Controlador {
	public $rut;
	public $mes;
	public $mesant;

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



	public function Especiales($rut, $mes){
		$this->rut = $rut;
		$this->mes = $mes;

		$conexion = self::conecta();

		$consulta = "SELECT especiales FROM tbl_cobros WHERE rut = :rut AND mes = :mes";

		$resultado = $conexion->prepare($consulta);
		$resultado->execute(array(":rut"=>$rut, ":mes"=>$mes));


		if(!$resultado){
			"No posee cobros especiales";
		}else{
			$cobes = $resultado -> fetchColumn();
			return $cobes;
		}

	}

	public function LuzActual($rut, $mes){
		$this->rut = $rut;
		$this->mes = $mes;

		$conexion = self::conecta();

		$consulta = "SELECT lectura FROM tbl_medluz WHERE rut = :rut AND mes = :mes";

		$resultado = $conexion->prepare($consulta);
		$resultado->execute(array(":rut"=>$rut, ":mes"=>$mes));


		if(!$resultado){
			return 0;
		}else{
			$luzac = $resultado -> fetchColumn();
			return $luzac;
		}

	}

	public function LuzAnterior($rut, $mesant){
		$this->rut = $rut;
		$this->mesant = $mesant;

		$conexion = self::conecta();

		$consulta = "SELECT lectura FROM tbl_medluz WHERE rut = :rut AND mes = :mes";

		$resultado = $conexion->prepare($consulta);
		$resultado->execute(array(":rut"=>$rut, ":mes"=>$mesant));


		if(!$resultado){
			return 0;
		}else{
			$luzan = $resultado -> fetchColumn();
			return $luzan;
		}

	}


	public function AguaActual($rut, $mes){
		$this->rut = $rut;
		$this->mes = $mes;

		$conexion = self::conecta();

		$consulta = "SELECT lectura FROM tbl_medagua WHERE rut = :rut AND mes = :mes";

		$resultado = $conexion->prepare($consulta);
		$resultado->execute(array(":rut"=>$rut, ":mes"=>$mes));


		if(!$resultado){
			return 0;
		}else{
			$aguaac = $resultado -> fetchColumn();
			return $aguaac;
		}

	}

	public function AguaAnterior($rut, $mesant){
		$this->rut = $rut;
		$this->mesant = $mesant;

		$conexion = self::conecta();

		$consulta = "SELECT lectura FROM tbl_medagua WHERE rut = :rut AND mes = :mes";

		$resultado = $conexion->prepare($consulta);
		$resultado->execute(array(":rut"=>$rut, ":mes"=>$mesant));


		if(!$resultado){
			return 0;
		}else{
			$aguaan = $resultado -> fetchColumn();
			return $aguaan;
		}

	}

}

 ?>