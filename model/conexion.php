<?php
$password = "";
$username="root";
$database="lis941";
$server="localhost";

try{
    $bd = new PDO(
        'mysql:host='.$server.';dbname='.$database,
        $username,
        $password,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );
    $bd->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e){
    echo $e->getMessage();
}
?>