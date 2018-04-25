<?php 


class clientsModel
{

	var $result;

	public function __construct(){
		require_once("bd/connectClass.php");
	}

	public function listClients(){
		$objconn = new connectClass();
		$objconn -> openConnect();
		$conn = $objconn -> getconn();
		$sql = "SELECT * FROM clientes";
		$this -> result = $conn -> query($sql);
	}


	public function consultClient($cod){
		$objconn = new connectClass();
		$objconn -> openConnect();
		$conn = $objconn -> getconn();
		$sql = 'SELECT * FROM clientes WHERE idCliente="'.$cod.'"';
		$this -> result = $conn -> query($sql);
	}


	public function getConsult(){
		return $this -> result;
	}

	public function insertClient($arrayClient){
		$objconn = new connectClass();
		$objconn -> openConnect();
		$conn = $objconn -> getconn();
		$sql = "INSERT INTO clientes (nome,telefone,email,endereco) VALUES ('".$arrayClient['name']."' , '".$arrayClient['phone']."' , '".$arrayClient['adress']."' , '".$arrayClient['email']."');";
		$this -> result = $conn -> query($sql);
	}

	public function updateClient($arrayClient){
		$objconn = new connectClass();
		$objconn -> openConnect();
		$conn = $objconn -> getconn();
		$sql = "UPDATE clientes set nome='".$arrayClient['name']."',telefone='".$arrayClient['phone']."',endereco='".$arrayClient['adress']."',email='".$arrayClient['email']."' where idCliente=".$arrayClient['cod'].";";
		$this -> result = $conn -> query($sql);
	}

	public function deleteClient($cod){
		$objconn = new connectClass();
		$objconn -> openConnect();
		$conn = $objconn -> getconn();
		$sql = "DELETE FROM clientes where idCliente='".$cod."';";
		$this -> result = $conn -> query($sql);
	}


	
}


?>