<?php
require_once('conexion.php');
Class PieChart{

    public function getBalance() {
        $bd = New Conexion();
    
        try {
            //Realizamos las consultas de entradas y salidas
            $entradasTotal = $bd->conectar()->query("SELECT SUM(montoEntrada) as totalEntradas FROM entradas")->fetch(PDO::FETCH_ASSOC);
            $salidasTotal = $bd->conectar()->query("SELECT SUM(montoSalida) as totalSalidas FROM salidas")->fetch(PDO::FETCH_ASSOC);

            //Desconectamos la base de datos
            $bd->desconectar($bd);

            //Realizamos la operacion del balance general
            $balance = $entradasTotal['totalEntradas'] - $salidasTotal['totalSalidas'];

            return array($entradasTotal['totalEntradas'], $salidasTotal['totalSalidas']);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}