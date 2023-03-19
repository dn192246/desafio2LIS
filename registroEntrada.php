<!DOCTYPE html>
<html>

<head>
	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


	<?php
    require('model/entradas.class.php');
	require('template/header.php');
	?>

	<div class="container mt-4">
		<h1 class="text-center mb-4">Registro de Entrada</h1>
		<form action="model/nuevaentrada.php" method="POST" enctype="multipart/form-data">

			<div class="form-group">
				<label for="tipoEntrada">Tipo:</label>
				<select class="form-select" id="tipoEntrada" name="tipoEntrada" required>
					<?php
					$entradasBD = new Entradas();
					$tipos = $entradasBD->getTipoEntradas();

					if($tipos>0){
					foreach($tipos as $opcion){
						echo '<option value='.$opcion["idTipoEntrada"].'>'.$opcion["nombreTipoEntrada"].'</option>';
					}
					}
					echo '</select>';
					?>
				</select>
			</div><br>
			
			<div class="form-group">
				<label for="cantidad">Cantidad:</label>
				$<input type="number" class="form-control" id="cantidad" name="cantidad" required>
			</div><br>

			<div class="form-group">
				<label for="date">Fecha:</label>
				<input type="date" class="form-control" id="fecha" name="fecha" required>
			</div><br>
			
			<div class="form-group">
				<label for="factura">Imagen de Factura:</label>
				<input class="form-control" accept=".jpg, .jpeg, .png, .webp, .gif" type="file" name="archivo">
			</div><br>

			<button type="submit" class="btn btn-primary" name="insertEntrada">Registrar Entrada</button>
		</form>
	</div>

	<?php
	
	require('template/footer.php');

	if($tipos==0){
		echo "<script>Swal.fire('Atención','No hay datos en la tabla Tipo de Entrada','warning');</script>";
	}

	if(isset($_SESSION['status']) && $_SESSION['status']!=''){
		echo "<script>Swal.fire('¡Enhorabuena!','Registro ingresado correctamente.','success');</script>";
		unset($_SESSION['status']);
	}else{
		echo "<script>Swal.fire('¡Ups!','No se completo el registro.','warning');</script>";
	}
	?>
	</body>

</html>
