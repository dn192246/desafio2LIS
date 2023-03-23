<?php

    require('entradas.class.php');
	session_start();

    if(isset($_POST['insertEntrada'])){
    $re = new Entradas();

    $re->setIdTipoEntrada($_POST['tipoEntrada']);
    $re->setMonto($_POST['cantidad']);
    $re->setFecha($_POST['fecha']);
    
    //Proceso para guardar la imagen a la carperta del servidor
    $nombreImg = $_FILES['archivo']['name'];
    $archivo = $_FILES['archivo']['tmp_name'];
    $dir = "../files/";
    $dir = $dir.$nombreImg;
    $re->setFactura($dir);
    
    //Ingresamos el registro a la BD
        if($re->insertEntrada($_SESSION['idUsuario'])){
            move_uploaded_file($archivo, $dir);
            $_SESSION['status'] = "ok";
        }else{
            unset($_SESSION['status']);
        }    
    header('location:../registroentrada.php');
}



?>