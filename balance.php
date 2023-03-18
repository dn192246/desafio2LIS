<!DOCTYPE html>
<html>
<head>
	<title>Balance de Entradas y Salidas</title>  
	<?php
	require('template/header.php');
	?>
</head>
<body>
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

</body>
</html>
