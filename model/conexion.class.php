<?php
class ConexionDB{
    private $password = "";
    private $username="root";
    private $database="lis941";
    private $server="localhost";

    public function connect(){
        try{
            $bd = new PDO("mysql:host={$this->server};dbname={$this->database}",$this->username,$this->password);
            $bd->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Conexion Exitosa";
            return $bd;
        }
        catch (Exception $e){
            echo $e->getMessage();
        }
    }
}
?>  