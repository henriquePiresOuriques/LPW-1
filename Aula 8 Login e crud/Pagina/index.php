
	<?php
		if (!isset($_GET['c'])) {

			require_once('Controllers/site.php');
			$site = new siteController();
			$site -> home();

		}else{
			switch ($_REQUEST['c']) {
					case 's':
						require_once("Controllers/site.php");
						$site = new siteController();
					

					if(!isset($_GET['a'])){
						$site -> home();
					}else{
						switch ($_REQUEST['a']) {
						case 'h': $site -> home(); break;
						case 's': $site -> sobre(); break;
						case 'p': $site -> produtos(); break;
						case 'c': $site -> contato(); break;
						}
					}

					break;

					case 'c':
						require_once("Controllers/clientes.php");
						$cliente = new clientesController();

						if(!isset($_GET['a'])){
							$cliente -> home();
						}else{
							switch ($_REQUEST['a']) {
								case 'cc': $cliente -> formCadastro();	break;
								case 'cca':	$cliente -> cadastroCliente();	break;
								case 'lc':	$cliente -> listaClientes();break;
							}
						}
						break;
					
				}

				
		}
		
	?>
