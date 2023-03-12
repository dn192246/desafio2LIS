<?php
include_once('conexion.php');

if(isset($_POST['email']) and isset($_POST['password']) and isset($_POST['password-verify'])){  
    $email = $_POST['email'];
    $password1 = $_POST['password'];
    $password2 = $_POST['password-verify'];

    if($password1 !== $password2){
        header('location: ../registro.php?error=1');
    }

    else{ 
        $clave = password_hash($password1,PASSWORD_DEFAULT);
        $sentencia = $bd->prepare("INSERT INTO usuarios(emailUsuario,claveUsuario) VALUES (?,?);");
        $resultado = $sentencia->execute([$email,$clave]);
        header('location:../login.php?registro=1');
    }
}
?>