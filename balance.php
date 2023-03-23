<!DOCTYPE html>
<html>
<head>
	<title>Balance de Entradas y Salidas</title>  
	<?php
	require('template/header.php');
	require('model/entradas.class.php');
	require('model/piechart.php');
	?>
</head>
<body>

<div class="container mt-4">
	<h1 class="text-center mb-4">Balance de Entradas y Salidas</h1>

	<div style="width: 25%;margin:auto"><canvas id="myChart"></canvas></div>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

	<table class="table table-responsive-sm" style="width:45%; float:left;margin: 0 1% 0 0">
	<thead>
			<tr>
				<th scope="col" colspan="2" style="text-align:center">Entradas</th>
			</tr>
		</thead>
		<tbody>
			<tr class="table-dark">
				<td scope="col">Tipo</td>
				<td scope="col">Cantidad</td>
			</tr>
		<?php

		$datos = New Entradas();
		$entradas = $datos->getEntradas();

		foreach($entradas as $entrada){
			echo "<tr><td>{$entrada['nombreTipoEntrada']}</td><td>{$entrada['montoEntrada']}</td></tr>";
		}
		?>
		</tbody>
		<tfoot>
			<tr class="table-dark">
				<td>Total</td>
				<td>
					<?php
					$datos = New PieChart();
					$resultado = $datos->getBalance();
					//Obtenemos los resultados de la BD y lo agregamos al gráfico
					echo $resultado[0];
					?>
				</td>
			</tr>
		</tfoot>
	</table>

	<!-- Tabla de Salidas -->

	<table class="table table-responsive-sm" style="width:45%; float:left;">
	<thead>
			<tr>
				<th scope="col" colspan="2" style="text-align:center">Salidas</th>
			</tr>
		</thead>
		<tbody>
			<tr class="table-dark">
				<td scope="col">Tipo</td>
				<td scope="col">Cantidad</td>
			</tr>
		<?php
		/*$datos = New Salidas();
		$datos->getSalidas();*/
		?>
		</tbody>
		<tfoot>
			<tr class="table-dark">
				<td>Total</td>
				<td>
					<?php
					$datos = New PieChart();
					$resultado = $datos->getBalance();
					//Obtenemos los resultados de la BD y lo agregamos al gráfico
					echo $resultado[1];
					?>
				</td>
			</tr>
		</tfoot>
	</table>
</div>
<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ['Entradas', 'Salidas'],
      datasets: [{
        data: <?php 
			$datos = New PieChart();
			$resultado = $datos->getBalance();
			//Obtenemos los resultados de la BD y lo agregamos al gráfico
			echo json_encode($resultado); 
			?>,
        borderWidth: 1,
		backgroundColor: [
			'rgb(85, 255, 39)',
			'rgb(247, 80, 80)'
		]
      }]
    }
  });
</script>
<?php
	require('template/footer.php')
?>

<!-- INICIO PAUSA
=======
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
			<?php

				require_once('model/conexion.php');
				class ReporteBalance {
				    private $bd;
					public function __construct($bd) {
			        $this->bd = $bd;
			    }

			    public function generarReporte() {
			        try {
			            $entradas = $this->bd->query("SELECT SUM(montoEntrada) as totalEntradas FROM entradas")->fetch(PDO::FETCH_ASSOC);
			            $salidas = $this->bd->query("SELECT SUM(montoSalida) as totalSalidas FROM salidas")->fetch(PDO::FETCH_ASSOC);
			            $balance = $entradas['totalEntradas'] - $salidas['totalSalidas'];

			            echo "<tr><td>Entradas</td><td>{$entradas['totalEntradas']}</td></tr>";
			            echo "<tr><td>Salidas</td><td>{$salidas['totalSalidas']}</td></tr>";
			            echo "<tr><td>Balance</td><td>{$balance}</td></tr>";
			        } catch (Exception $e) {
			            echo $e->getMessage();
			        }
			    }
			    
			}

			$bd = Conexion::conectar();
			$reporte = new ReporteBalance($bd);
			$reporte->generarReporte();
			Conexion::desconectar($bd);
			?>
	</tbody>
</table>

<?php
	require_once('model/piechart.php');
	// arreglos
	$data = array(
		array("Entradas", $entradas['totalEntradas']),
		array("Salidas", $salidas['totalSalidas']),
		array("Balance", $balance)
	);

	
	$options = array(
		'title' => 'Balance de Entradas y Salidas',
		'width' => 400,
		'height' => 300
	);

	//Crea el pastel
	$chart = new PieChart($data, $options);
	echo $chart->render();
?>

</div>

<?php
	require('template/footer.php')
?>



FIN PAUSA-->
</body>
</html>
