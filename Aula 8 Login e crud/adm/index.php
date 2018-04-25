
	<?php
		session_start();

		if(!isset($_GET['c'])){

			require_once("Controllers/main.php");
			$main = new mainController();
			$main -> index();

		}else{
			switch ($_REQUEST['c']) {
				case 'u':
					require_once("Controllers/user.php");
					$user = new userController();

					if(!isset($_GET['a'])){
						$user -> index();
					}else{
						switch ($_REQUEST['a']) {
							case 'cl': $user -> consultLoginUser(); break;
						}
					}
					break;

				case 'm':
					require_once("Controllers/main.php");
					$main = new mainController();

					if(!isset($_GET['a'])){
						$main -> index();
					}else{
						switch ($_REQUEST['a']) {
							case 'i' : $main -> index(); break;
							case 'l' : $main -> login(); break;
							case 'sd' : $main -> session_destroy(); break;
						}
					}
					break;

				case 'c':
					require_once("Controllers/clients.php");
					$client = new clientsController();

					if (!isset($_GET['a'])) {
						$client -> index();
					}else{
						switch ($_REQUEST['a']) {
							case 'lc': $client -> listClients(); break;
							case 'ac': $client -> addClient(); break;
							case 'ic': $client -> insertClient(); break;
							case 'alc': $cod=$_GET['id']; $client -> alterClient($cod); break;
							case 'uc': $client -> updateClient(); break;
							case 'dc': $cod=$_GET['id']; $client -> deleteClient($cod); break;

						}
					}
				
			}
		}
		
	?>
