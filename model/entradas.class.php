<?php

require('conexion.class.php');

class Entradas extends ConexionDB{
    private $idTipoEntrada;
    private $monto;
    private $fecha;
    private $factura;

    public function setIdTipoEntrada($idTipoEntrada){
        $this->idTipoEntrada = $idTipoEntrada;
    }
    public function setMonto($monto){
        $this->monto = $monto;
    }
    public function setFecha($fecha){
        $fecha = date("Y-m-d", strtotime($fecha));
        $this->fecha = $fecha;
    }
    public function setFactura($factura){
        $this->factura = $factura;
    }
    public function getIdTipoEntrada(){
        return $this->idTipoEntrada;
    }
    public function getMonto(){
        return $this->monto;
    }
    public function getFecha(){
        return $this->fecha;
    }
    public function getFactura(){
        return $this->factura;
    }

    public function insertEntrada($idusuario){
        try{
            $sql = "INSERT INTO entradas(idUsuario, idTipoEntrada, montoEntrada, fechaEntrada, facturaEntrada) VALUES (?,?,?,?,?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$idusuario, $this->idTipoEntrada, $this->monto, $this->fecha, $this->factura]);
            return $stmt;
        }
        catch(Exception $e){
            return $e->getMessage();
            //echo "<script>Swal.fire('Oh!','".$e->getMessage()."','success');</script>";
        }
    }

    public function updateEntrada($idEntrada){
        try{
        $sql = "UPDATE entradas SET idUsuario=?, idTipoEntrada=?, montoEntrada=?, fechaEntrada=?, facturaEntrada=? WHERE idEntrada=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$this->idUsuario, $this->idTipoEntrada, $this->monto, $this->fecha, $this->factura, $idEntrada]);
    }
    catch(Exception $e){
        return $e->getMessage();
    }
    }

    public function deleteEntrada($idEntrada){
        try{
        $sql = "INSERT INTO entradas(idUsuario, idTipoEntrada, montoEntrada, fechaEntrada, facturaEntrada VALUES (?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$this->idEntrada,$this->idEntrada, $this->idEntrada]);
    }
    catch(Exception $e){
        return $e->getMessage();
    }
    }

    public function getTipoEntradas(){
        try{
        $sql = "SELECT * FROM tipoentradas";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        while($result = $stmt->fetchAll()){
            return $result;
        }
    }
    catch(Exception $e){
        return $e->getMessage();
    }
    }

}

?>