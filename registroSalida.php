<!DOCTYPE html>
<html>

<head>
	<title>Registro de Salida</title>

	<?php
	require('template/header.php');
	?>

	<div class="container mt-4">
		<h1 class="text-center mb-4">Registro de Salida</h1>
		<form action="" method="POST">
			<div class="form-group">
				<label for="tipoEntrada">Tipo:</label>
				<select class="form-select" id="tipoEntrada" required>
				</select>
			</div><br>

			<div class="form-group">
				<label for="cantidad">Cantidad:</label>
				$<input type="number" class="form-control" id="cantidad" required>
			</div><br>


			<div class="form-group">
				<label for="factura">Imagen de Factura:</label>
				<input class="form-control" accept=".jpg, .jpeg, .png, .webp, .gif" type="file" name="archivo">
			</div><br>


			<button type="submit" class="btn btn-primary">Registrar Salida</button>
		</form>
	</div>


	<?php
	require('template/footer.php')
	?>

	</body>

</html>