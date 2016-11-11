<?php 
class Controlador {
	public $user;
	public $pass;
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
			print '<META HTTP-EQUIV=Refresh CONTENT="1; URL=login.php">';
			exit();
		}

	}



	public function Busqueda($user, $pass){
		$this->user = $user;
		$this->pass = $pass;

		//self llama a la misma clase y hace uso de un metodo
		$conexion = self::conecta();

		$consulta = "SELECT count(*) FROM tbl_propietario WHERE user = :user AND pass = :pass";

		$resultado = $conexion->prepare($consulta);
		$resultado->execute(array(":user"=>$user, ":pass"=>$pass));


		if(!$resultado){
			"Error en la consulta";
			print '<META HTTP-EQUIV=Refresh CONTENT="1; URL=login.php">';
		}else{
			$registro = $resultado -> fetchColumn();
			return $registro;
		}

	}

	public function Rut($user, $pass){
		$this->user = $user;
		$this->pass = $pass;
		
		$consulta = "SELECT rut FROM tbl_propietario 
		             WHERE user = :user AND pass = :pass";

		$conexion = self::conecta(); 
		$resultado = $conexion->prepare($consulta);
		$resultado->execute(array(":user"=>$user, ":pass"=>$pass));
		if (!$resultado) {
		    print "Error en la consulta";
		    print '<META HTTP-EQUIV=Refresh CONTENT="1; URL=login.php">';
		}else{
		    $registro = $resultado -> fetchColumn();
			return $registro;   
		}   
 	}   

}

 ?>