<?php
include_once('conexion.php');

if(isset($_POST['email']) and isset($_POST['password']) and isset($_POST['password-verify'])){  
    $email = $_POST['email'];
    $password1 = $_POST['password'];
    $password2 = $_POST['password-verify'];

    if($password1 !== $password2){
        header('location: ../registro.php?error=1');
    }
    else if(preg_match("/\w+@\w+.\w{2,4}/",$email)==0){
        header('location: ../registro.php?error=4');
    }

    else{ 
        $comprobarUsuario = $bd->prepare("SELECT * from usuarios where emailUsuario = ?;");
        $comprobarUsuario->execute([$email]);

        $usuario= $comprobarUsuario->fetch(PDO::FETCH_OBJ);

        if($usuario == true){
            header('location:../registro.php?error=2');
        }

        else{
            $clave = password_hash($password1,PASSWORD_DEFAULT);
            $sentencia = $bd->prepare("INSERT INTO usuarios(emailUsuario,claveUsuario) VALUES (?,?);");
            $resultado = $sentencia->execute([$email,$clave]);
            header('location:../login.php?registro=1');
        }       
    }
}
?>