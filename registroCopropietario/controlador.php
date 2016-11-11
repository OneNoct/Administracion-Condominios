<?php 
class Controlador {
	public $rut;
	public $name;
	public $lastname;
	public $email;
	public $user;
	public $pass;
	public $phone;
	public $cellphone;
	public $npropiedad;

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



	public function Insert($rut, $name, $lastname, $email, $user, $pass, $phone, $cellphone, $npropiedad){
		$this->rut = $rut;
		$this->name = $name;
		$this->lastname = $lastname;
		$this->email = $email;
		$this->user = $user;
		$this->pass = $pass;
		$this->phone = $phone;
		$this->cellphone = $cellphone;
		$this->npropiedad = $npropiedad;

		//self llama a la misma clase y hace uso de un metodo
		$conexion = self::conecta();

		$consulta = "INSERT INTO tbl_propietario VALUES (:rut, :name, :lastname, :email, :user, :pass, :phone, :cellphone, :npropiedad)";

		$resultado = $conexion->prepare($consulta);
		$resultado->execute(array(':rut'=>$rut, ':name'=>$name, ':lastname'=>$lastname, ':email'=>$email, ':user'=>$user, ':pass'=>$pass, ':phone'=>$phone, ':cellphone'=>$cellphone, ':npropiedad'=>$npropiedad));


		if($resultado){
			return true;
		}else{
			return false;
		}

	}

}

 ?>