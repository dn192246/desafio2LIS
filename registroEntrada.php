<!DOCTYPE html>
<html>
<head>

<?php 
		require('header.php');
	?>

	<div class="container mt-4">
		<h1 class="text-center mb-4">Registro de Entrada</h1>
		<form>
			<div class="form-group">
				<label for="concepto">Concepto:</label>
				<input type="text" class="form-control" id="concepto">
			</div>
			<br><br>
			<div class="form-group">
				<label for="cantidad">Cantidad:</label>
				$<input type="number" class="form-control" id="cantidad">
			</div>
			<br>
			<button type="submit" class="btn btn-primary">Registrar Entrada</button>
		</form>
	</div>

	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
