<!DOCTYPE html>
<html>

<head>
	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


	<?php
    require('model/Salidas.class.php');
	require('template/header.php');
	?>

	<div class="container mt-4">
		<h1 class="text-center mb-4">Registro de Salida</h1>
		<form action="model/nuevaSalida.php" method="POST" enctype="multipart/form-data">

			<div class="form-group">
				<label for="tipoSalida">Tipo:</label>
				<select class="form-select" id="tipoSalida" name="tipoSalida" required>
					<?php
					$SalidasBD = new Salidas();
					$tipos = $SalidasBD->getTipoSalidas();

					if($tipos>0){
					foreach($tipos as $opcion){
						echo '<option value='.$opcion["idTipoSalida"].'>'.$opcion["nombreTipoSalida"].'</option>';
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

			<button type="submit" class="btn btn-primary" name="insertSalida">Registrar Salida</button>
		</form>
	</div>

	<?php
	
	require('template/footer.php');

	if($tipos==0){
		echo "<script>Swal.fire('Atención','No hay datos en la tabla Tipo de Salida','warning');</script>";
	}

	if(isset($_SESSION['status']) && $_SESSION['status']!=''){
		echo "<script>Swal.fire('¡Enhorabuena!','Registro ingresado correctamente.','success');</script>";
		unset($_SESSION['status']);
	}
	?>
	</body>

</html>
