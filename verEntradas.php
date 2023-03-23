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
					<th colspan="2">Concepto</th>
					<th>Cantidad</th>
					<th>Factura</th>
				</tr>
			</thead>
			<tbody>			
				<?php
				include_once('model/entradas.class.php');
				$datos = new Entradas();
				$entradas = $datos->getEntradas();

				foreach ($entradas as $entrada) {
					$fecha = $entrada['fechaEntrada'];
					$tipo = $entrada['nombreTipoEntrada'];
					$monto = $entrada['montoEntrada'];
					$factura = $entrada['facturaEntrada'];

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