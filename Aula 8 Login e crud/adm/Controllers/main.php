<?php 

/**
* 
*/
class mainController
{

	public function index(){

		if(!isset($_SESSION["user"])){
			header("Location: index.php?c=m&a=l");
		}

		require("Views/header.php");
		require("Views/site/home.php");
		require("Views/footer.php");
	}

	public function login(){
		require("Views/user/login.php");
	}

	public function session_destroy(){
		session_destroy();
		header("Location: index.php?c=m&a=l");
	}


}

?>