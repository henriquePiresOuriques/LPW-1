<?php 
	
class clientesController
{
	
	function formCadastro()
	{
		require_once ("Views/header.php");
		require_once ("Views/clientes/formCadastro.php");
		require_once ("Views/footer.php");
	}

	function cadastroCliente()
	{
		$cliente = array(
			"nome" => $_POST['nome'],
			"login" => $_POST['login'],
			"gender" => $_POST['gender'],
			"occupation" => $_POST['occupation'],
			"sobre" => $_POST['sobre'],
			"cidade" => $_POST['cidade'],
			"veiculo" => $_POST['veiculo']  
		);

		require_once ("Views/header.php");
		require_once ("Views/clientes/cadastroCliente.php");
		require_once ("Views/footer.php");

	}

	function listaClientes(){
		require_once("models/clientesModel.php");
		$cliente = new clientesModel();
		$cliente ->listaClientes();
		$resultado = $cliente -> getConsulta();

		$arrayClientes = array();

		while($linha = $resultado -> fetch_assoc()){
			array_push($arrayClientes, $linha);
		}

		require_once ("Views/header.php");
		require_once ("Views/clientes/listaClientes.php");
		require_once ("Views/footer.php");
	}
}


?>