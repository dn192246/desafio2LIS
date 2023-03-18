<?php
require_once('conexion.php');

try {
    $entradas = $bd->query("SELECT SUM(montoEntrada) as totalEntradas FROM entradas")->fetch(PDO::FETCH_ASSOC);
    $salidas = $bd->query("SELECT SUM(montoSalida) as totalSalidas FROM salidas")->fetch(PDO::FETCH_ASSOC);
    $balance = $entradas['totalEntradas'] - $salidas['totalSalidas'];

    $labels = array('Entradas', 'Salidas');
    $data = array($entradas['totalEntradas'], $salidas['totalSalidas']);
    $colors = array('#36a2eb', '#ff6384');

    $chartData = array(
        'labels' => $labels,
        'datasets' => array(array(
            'data' => $data,
            'backgroundColor' => $colors
        ))
    );

    echo "<canvas id='pieChart'></canvas>";

} catch (Exception $e) {
    echo $e->getMessage();
}

?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('pieChart').getContext('2d');
    var pieChart = new Chart(ctx, {
        type: 'pie',
        data: <?php echo json_encode($chartData); ?>
    });
</script>
