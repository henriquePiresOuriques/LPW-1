<table class="table">
	
	<tr>
		<th>Código</th>
		<th>Nome</th>
	</tr>


	<?php 
		foreach ($arrayClientes as $cliente) {
	?>

		<tr>
			<td> <?=$cliente["idCliente"]?> </td>
			<td> <?=$cliente["nome"]?> </td>
		</tr>
	<?php
	}
	?>

</table>