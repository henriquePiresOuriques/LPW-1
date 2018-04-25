<?php 


class usersModel
{

	var $result;


	public function consultUser($login){
		require_once("bd/connectClass.php");
		$objconn = new connectClass();
		$objconn -> openConnect();
		$sql = 'SELECT * FROM usuarios WHERE usuario="'.$login.'"';
		$conn = $objconn -> getconn();
		$this -> result = $conn -> query($sql);
	}


	public function getConsult(){
		return $this -> result;
	}

	
}


?>