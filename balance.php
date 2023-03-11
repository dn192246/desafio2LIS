<!DOCTYPE html>
<html>
<head>
	<title>Balance de Entradas y Salidas</title>
	
	<?php 
		require('header.php');
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
	<!-- Importar jQuery, Popper.js y Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
