<h2>Alterar Cliente</h2>

<form method="POST" action="?c=c&a=uc">
	
	<div class="form-group">
		<div>
			<label form="name">ID:</label>
			<input type="text" class="form-control" name="cod" value="<?= $arrayClient['idCliente'] ?>" readonly="readonly">
		</div>
		<div>
			<label form="name">Nome:</label>
			<input type="text" class="form-control" name="name" value="<?= $arrayClient['nome'] ?>">
		</div>
		<div>
			<label form="email">Email:</label>
			<input type="mail" class="form-control" name="email" value="<?= $arrayClient['email'] ?>">
		</div>
		<div>
			<label form="email">Telefone:</label>
			<input type="text" class="form-control" name="phone" value="<?= $arrayClient['telefone'] ?>">
		</div>
		<div>
			<label form="email">Endereço:</label>
			<input type="text" class="form-control" name="adress" value="<?= $arrayClient['endereco'] ?>">
		</div>

		<br>
		<button type="submit" class="btn btn-default">Salvar</button>

	</div>
</form>