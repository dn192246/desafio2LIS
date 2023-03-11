<!DOCTYPE html>
<html>

<head>
	<title>Mostrar Salidas</title>

	<?php
	require('header.php');
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


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	</body>

</html>