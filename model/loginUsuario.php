<?php
include_once('conexion.php');

if (isset($_POST['email']) and isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $buscarUsuario = $bd->prepare("SELECT * from usuarios where emailUsuario = ?;");
    $buscarUsuario->execute([$email]);

    $usuario = $buscarUsuario->fetch(PDO::FETCH_ASSOC);

    if($usuario == true && password_verify($password,$usuario["claveUsuario"])){
        session_start();
        $_SESSION["idUsuario"]=$usuario["idUsuario"];
        $_SESSION["usuario"]=$usuario["emailUsuario"];
        header('location:../balance.php');
        exit();
    }
    else{
        header('location:../login.php?login=1');
    }
}
