<?php

include_once('conexion.php');

class Salidas extends Conexion{
    private $idTipoSalida;
    private $monto;
    private $fecha;
    private $factura;

    public function setIdTipoSalida($idTipoSalida){
        $this->idTipoSalida = $idTipoSalida;
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
    public function getIdTipoSalida(){
        return $this->idTipoSalida;
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

    public function insertSalida($idusuario){
        try{
            $sql = "INSERT INTO salidas(idUsuario, idTipoSalida, montoSalida, fechaSalida, facturaSalida) VALUES (?,?,?,?,?)";
            $stmt = $this->conectar()->prepare($sql);
            $stmt->execute([$idusuario, $this->idTipoSalida, $this->monto, $this->fecha, $this->factura]);
            $this->desconectar($stmt);
            return $stmt;
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }

    public function updateSalida($idSalida){
        try{
        $sql = "UPDATE salidas SET idUsuario=?, idTipoSalida=?, montoSalida=?, fechaSalida=?, facturaSalida=? WHERE idSalida=?";
        $stmt = $this->conectar()->prepare($sql);
        $stmt->execute([$_SESSION['idUsuario'], $this->idTipoSalida, $this->monto, $this->fecha, $this->factura, $idSalida]);
        $this->desconectar($stmt);
    }
    catch(Exception $e){
        return $e->getMessage();
    }
    }

    public function deleteSalida($idSalida){
        try{
        $sql = "DELETE FROM Salidas WHERE idSalida = ?";
        $stmt = $this->conectar()->prepare($sql);
        $stmt->execute([$idSalida]);
        $this->desconectar($stmt);
    }
    catch(Exception $e){
        return $e->getMessage();
    }
    }

    public function getTipoSalidas(){
        try{
        $sql = "SELECT * FROM tipoSalidas";
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
    
    public function getSalidas() {
        try {
            $user = $_SESSION['idUsuario'];
            //Realizamos las consultas de Salidas y salidas
            $Salidas = $this->conectar()->query("SELECT `idSalida`,`idUsuario`,Salidas.`idTipoSalida`,`montoSalida`,`fechaSalida`,`facturaSalida`,tipoSalidas.nombreTipoSalida FROM `Salidas` LEFT JOIN `tipoSalidas` ON tipoSalidas.idTipoSalida=Salidas.idTipoSalida order by fechaSalida desc;")->fetchAll(PDO::FETCH_ASSOC);
            //Desconectamos la base de datos
            $this->desconectar($Salidas);

            return $Salidas;

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    
}

    

?>