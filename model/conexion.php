<?php
class Conexion
{
    private static $password = "";
    private static $username = "root";
    private static $database = "lis941";
    private static $server = "localhost";

    public static function conectar()
    {
        try {
            $bd = new PDO(
                'mysql:host=' . self::$server . ';dbname=' . self::$database,
                self::$username,
                self::$password,
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
            );
            $bd->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $bd;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public static function desconectar($bd){
        $bd = null;
    }

}

?>