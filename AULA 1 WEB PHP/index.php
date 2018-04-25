<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</style>
</head>
<body>

	<div class="container-fluid">
		<div class="row">
			<header class="col-md-12">Pagina inicial</header>
		</div>

		<div class="row">

			<nav class="col-md-3">
					<br>
			  		<h2>MENU</h2>
			  		<a href="?m=h">Home</a><br>
					<a href="?m=s">Sobre</a><br>
					<a href="?m=p">Produtos</a><br>
					<a href="?m=c">Contato</a><br>
				
			</nav>

			<section class="col-md-9">
	
				<?php  
					if(!isset($_GET['m']))
						require_once('home.php');
					else{
						switch ($_REQUEST['m']) {
							case 'h':
								require_once('home.php');
								break;
							
							case 's':
								require_once('sobre.php');
								break;	

							case 'p':
								require_once('produtosservicos.php');
								break;

							case 'c':
								require_once('contato.php');
								break;
						}
					}
				?>
			</section>

		</div>
		

		<div class="row">
			<footer class="col-md-12">
				<p>Todos os direitos reservados.</p>
			</footer>
		</div>
	</div>

</body>
</html>