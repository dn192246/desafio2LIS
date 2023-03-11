<!DOCTYPE html>
<html>

<head>
	<title>Ver Entradas</title>

	<?php
	require('template/header.php');
	?>

	<div class="container mt-4">
		<h1 class="text-center mb-4">Balance de Entradas</h1>
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
				<!-- Aquí se mostrarían las entradas -->
				<tr>
					<td>2023-03-08</td>
					<td>08:00:00</td>
					<td colspan="2">Remesa Familiar</td>
					<td>$250</td>
				</tr>
			</tbody>
		</table>
	</div>

	<?php
	require('template/footer.php')
	?>
	
</body>

</html>