<?php 


class clientesModel 
{
	
	function listaClientes()
	{
		require_once("bd/connectClass.php");
		$objconn = new connectClass();
		$objconn -> openConnect();
		$conn = $objconn -> getConn();
		$sql = "SELECT * FROM clientes";
		$this -> resultado = $conn -> query($sql);
	}

	public function getConsulta(){
		return $this -> resultado;
	}
}

?>