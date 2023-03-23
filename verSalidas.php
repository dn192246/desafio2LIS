<!DOCTYPE html>
<html>

<head>
	<title>Ver Salidas</title>

	<?php
	require('template/header.php');
	?>

	<div class="container mt-4">
		<h1 class="text-center mb-4">Balance de Salidas</h1>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Fecha</th>
					<th colspan="2">Concepto</th>
					<th>Cantidad</th>
					<th>Factura</th>
				</tr>
			</thead>
			<tbody>			
				<?php
				include_once('model/Salidas.class.php');
				$datos = new Salidas();
				$Salidas = $datos->getSalidas();

				foreach ($Salidas as $Salida) {
					$fecha = $Salida['fechaSalida'];
					$tipo = $Salida['nombreTipoSalida'];
					$monto = $Salida['montoSalida'];
					$factura = $Salida['facturaSalida'];

					if($factura!=null){
						echo "<tr>
						<td>$fecha</td>
						<td colspan=\"2\">$tipo</td>
						<td>\$$monto</td>
						<td><a class=\"btn btn-primary\"href=\"./$factura\">Ver Factura</a></td>
						</tr>";
					}
					else{
						echo "<tr>
						<td>$fecha</td>
						<td colspan=\"2\">$tipo</td>
						<td>\$$monto</td>
						<td>Sin Factura</td>
						</tr>";
					}
					
				}
				?>
			</tbody>
		</table>
	</div>

	<?php
	require('template/footer.php')
	?>

	</body>

</html>