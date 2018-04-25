<table class="table">

	<tr>
		<td>Nome:</td>
		<td><?=$cliente['nome'];?></td>
	</tr>
	<tr>
		<td>Login:</td>
		<td><?=$cliente['login'];?></td>
	</tr>
	<tr>
		<td>Sexo:</td>
		<td><?=$cliente['gender'];?></td>
	</tr>
	<tr>	
		<td>Ocupação:</td>
		<td><?php foreach($cliente["occupation"] as $oc){
        echo "$oc ";
    	}
    	?>
    	</td>
	</tr>
	<tr>
		<td>Descrição:</td>
		<td><?=$cliente['sobre'];?></td>
	</tr>
	<tr>
		<td>Cidade:</td>
		<td><?=$cliente['cidade'];?></td>
	</tr>
	<tr>
		<td>Veiculo:</td>
		<td><?=$cliente['veiculo'];?></td>
	</tr>
	
</table>