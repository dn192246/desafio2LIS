<?php

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
            
            echo "<table>";
            echo "<tr><th>Entradas</th><th>Salidas</th><th>Balance</th></tr>";
            echo "<tr><td>\${$entradas['totalEntradas']}</td><td>\${$salidas['totalSalidas']}</td><td>\${$balance}</td></tr>";
            echo "</table>";
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}

// Usando la clase
require_once('conexion.php');
$reporte = new ReporteBalance($bd);
$reporte->generarReporte();
