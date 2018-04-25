<?php 



class clientsController
{

	function __construct(){
		require_once("models/clientsModel.php");
	}
	
	public function addClient(){
		require("Views/header.php");
		require("Views/clients/addClient.php");
		require("Views/footer.php");
	}

	public function listClients(){

		$client = new clientsModel();
		$client ->listClients();
		$result = $client -> getConsult();

		$arrayClients = array();

		while($line = $result->fetch_assoc()){
			array_push($arrayClients,$line);
		}
		require ("Views/header.php");
		require ("Views/clients/listClients.php");
		require ("Views/footer.php");
	}

	public function insertClient(){
		$arrayClient["name"] = $_POST["name"];
		$arrayClient["adress"] = $_POST["adress"];
		$arrayClient["phone"] = $_POST["phone"];
		$arrayClient["email"] = $_POST["email"];
		$client = new clientsModel();
		$client -> insertClient($arrayClient);
		$this -> listClients();
	}

	public function alterClient($cod){
		$client = new clientsModel();
		$client -> consultClient($cod);
		$result = $client -> getConsult();

		if( $arrayClient = $result->fetch_assoc()){
			
			require("Views/header.php");
			require("Views/clients/alterClient.php");
			require("Views/footer.php");
		}

	}

	public function updateClient(){
		$arrayClient["cod"] = $_POST["cod"];
		$arrayClient["name"] = $_POST["name"];
		$arrayClient["adress"] = $_POST["adress"];
		$arrayClient["phone"] = $_POST["phone"];
		$arrayClient["email"] = $_POST["email"];
		$client = new clientsModel();
		$client -> updateClient($arrayClient);
		$this -> listClients();
	}

	public function deleteClient($cod){
		$client = new clientsModel();
		$client ->deleteClient($cod);
		$this -> listClients();
	}

}

?>