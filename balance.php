<!DOCTYPE html>
<html>

<head>
	<title>Balance de Entradas y Salidas</title>

	<?php
	require('template/header.php');
	?>

	<div class="container mt-4">
		<h1 class="text-center mb-4">Balance de Entradas y Salidas</h1>
		<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col">Tipo</th>
					<th scope="col">Cantidad</th>
				</tr>
			</thead>
			<tbody>
				<!-- Aquí iría el código PHP para mostrar el balance -->
				<tr>
					<td>Entradas</td>
					<td>$1000</td>
				</tr>
				<tr>
					<td>Salidas</td>
					<td>$500</td>
				</tr>
				<tr>
					<td>Balance</td>
					<td>$500</td>
				</tr>
			</tbody>
		</table>
	</div>

	<?php
	require('template/footer.php')
	?>

	</body>

</html>