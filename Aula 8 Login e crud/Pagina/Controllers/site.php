<?php 
	
	class siteController
	{
		public function home(){
			require_once ("Views/header.php");
			require_once ("Views/site/home.php");
			require_once ("Views/footer.php");
		}

		public function sobre(){
			require_once ("Views/header.php");
			require_once ("Views/site/sobre.php");
			require_once ("Views/footer.php");
		}

		public function produtos(){
			require_once ("Views/header.php");
			require_once ("Views/site/produtos.php");
			require_once ("Views/footer.php");
		}
		
		public function contato(){
			require_once ("Views/header.php");
			require_once ("Views/site/contato.php");
			require_once ("Views/footer.php");
		}
	}
 ?>