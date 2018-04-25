<h2>Cadastro do Cliente</h2>

<form class="form" method="POST" action="?c=c&a=cca">
	
	<div class="form-group">
		<label>Nome</label>
		<input type="text" size="12" maxlength="12" name="nome">
	</div>

	<div class="form-group">
		<label>Login</label>
		<input type="text" size="12" maxlength="12" name="login">
	</div>

	<div class="radio">
		<p>Selecione o Sexo</p>
		<label><input type="radio" value="Masculino" name="gender" checked>Masculino</label><br>
		<label><input type="radio" value="Feminino" name="gender">Feminino</label>
	</div>

	<div class="checkbox">
		<p>Ocupação</p>
		<label><input type="checkbox" value="Trabalho" name="occupation[]" checked>Trabalho</label><br>
		<label><input type="checkbox" value="Estudo" name="occupation[]" checked>Estudo</label>
		<label><input type="checkbox" value="Estagio" name="occupation[]" checked>Estagio</label>
	</div>

	<br>

	<div class="textarea">
		<p>Fale sobre você</p>
		<textarea name="sobre" rows="10" cols="30">
		</textarea>
	</div>

	<br>

	<div class="select">
		<p>Qual sua cidade</p>
		<select name="cidade">
			<option value="Torres">Torres</option>
			<option value="Capão da Canoa">Capão da Canoa</option>
			<option value="Arroio do Sal">Arroio do Sal</option>
		</select>
	</div>

	<br>

	<div class="select">
		<p>Qual seu veículo?</p>
		<select name="veiculo" size="2">
			<option value="nenhum">Nenhum</option>
			<option value="bicicleta">Bicicleta</option>
			<option value="carro">Carro</option>
			<option value="moto">Moto</option>
		</select>
	</div>
	

	<br>
	<br>
	<input type="submit" name="Envia">
	<br>
	<br>

</form>