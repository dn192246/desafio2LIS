<!DOCTYPE html>
<html>

<head>

	<?php
	require('header.php');
	?>

	<div class="container mt-4">
		<h1 class="text-center mb-4">Registro de Entrada</h1>
		<form action="" method="POST" >
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

			
			<button type="submit" class="btn btn-primary">Registrar Entrada</button>
		</form>
	</div>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	</body>

</html>