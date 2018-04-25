<?php 


class userController
{
	
	public function consultLoginUser(){
		$login = $_POST["login"];
		require("models/userModel.php");
		$user = new usersModel();
		$user -> consultUser($login);
		$result = $user -> getConsult();

		if ($line = $result -> fetch_assoc()) {
			$pass = $line['senha'];
			$passUser = $_POST["pass"];
			if ($pass = $passUser) {
				$_SESSION['idUser'] = $line['idUsuario'];
				$_SESSION['user'] = $line['usuario'];
				header("Location: index.php?c=m&a=i");
			}

			else{
				print("Senha errada");
			}
		}
		else{
			print("Usuário não existe");
		}

	}

}



?>