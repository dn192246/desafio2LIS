<!DOCTYPE html>
<html>

<head>
	<title>Mostrar Salidas</title>

	<?php
	require('template/header.php');
	?>

	<div class="container mt-4">
		<h1 class="text-center mb-4">Balance de Salidas</h1>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Fecha</th>
					<th>Hora</th>
					<th colspan="2">Concepto</th>
					<th>Cantidad</th>
				</tr>
			</thead>
			<tbody>
				<!-- Aquí iría el código PHP para mostrar las salidas -->
				<tr>
					<td>2023-03-08</td>
					<td>08:00:00</td>
					<td colspan="2">Compra de medicamentos</td>
					<td>$22.31</td>
				</tr>
			</tbody>
		</table>
	</div>

	<?php
	require('template/footer.php')
	?>

	</body>
</html>