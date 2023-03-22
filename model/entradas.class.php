<?php

require('conexion.php');

class Entradas extends Conexion {
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
        $fecha = date("Y-m-d", strtotime($fecha)); //Configuramos la fecha en formato Y-m-d, para el ingreso en la BD
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
            $stmt = $this->conectar()->prepare($sql);
            $stmt->execute([$idusuario, $this->idTipoEntrada, $this->monto, $this->fecha, $this->factura]);
            $this->desconectar($stmt);
            return $stmt;
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }

    public function updateEntrada($idEntrada){
        try{
        $sql = "UPDATE entradas SET idUsuario=?, idTipoEntrada=?, montoEntrada=?, fechaEntrada=?, facturaEntrada=? WHERE idEntrada=?";
        $stmt = $this->conectar()->prepare($sql);
        $stmt->execute([$this->idUsuario, $this->idTipoEntrada, $this->monto, $this->fecha, $this->factura, $idEntrada]);
        $this->desconectar($stmt);
    }
    catch(Exception $e){
        return $e->getMessage();
    }
    }

    public function deleteEntrada($idEntrada){
        try{
        $sql = "DELETE FROM entradas WHERE idEntrada = ?";
        $stmt = $this->conectar()->prepare($sql);
        $stmt->execute([$this->idEntrada]);
        $this->desconectar($stmt);
    }
    catch(Exception $e){
        return $e->getMessage();
    }
    }

    public function getTipoEntradas(){
        try{
        $sql = "SELECT * FROM tipoentradas";
        $stmt = $this->conectar()->prepare($sql);
        $stmt->execute();

        while($result = $stmt->fetchAll()){
            return $result;
        }
        $this->desconectar($stmt);
        }catch(Exception $e){
        return $e->getMessage();
        }
    }
    
    public function getEntradas() {
        try {
            //Realizamos las consultas de entradas y salidas
            $entradas = $this->conectar()->query("SELECT `idEntrada`,`idUsuario`,entradas.`idTipoEntrada`,`montoEntrada`,`fechaEntrada`,`facturaEntrada`,tipoentradas.nombreTipoEntrada FROM `entradas` LEFT JOIN `tipoentradas` ON tipoentradas.idTipoEntrada=entradas.idTipoEntrada;")->fetchAll(PDO::FETCH_ASSOC);
            //Desconectamos la base de datos
            $this->desconectar($entradas);

            return $entradas;

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    
}

    

?>