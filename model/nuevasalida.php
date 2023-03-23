<?php

    require('salidas.class.php');
	session_start();

    if(isset($_POST['insertSalida'])){
    $re = new Salidas();

    $re->setIdTipoSalida($_POST['tipoSalida']);
    $re->setMonto($_POST['cantidad']);
    $re->setFecha($_POST['fecha']);
    
    //Proceso para guardar la imagen a la carperta del servidor
    $nombreImg = $_FILES['archivo']['name'];
    $archivo = $_FILES['archivo']['tmp_name'];
    $dir = "../files/";
    $dir2="./files/";
    $dir = $dir.$nombreImg;
    $dir2=$dir2.$nombreImg;
    $re->setFactura($dir2);
    
    //Ingresamos el registro a la BD
        if($re->insertSalida($_SESSION['idUsuario'])){
            move_uploaded_file($archivo, $dir);
            $_SESSION['status'] = "ok";
        }else{
            unset($_SESSION['status']);
        }    
    header('location:../registroSalida.php');
}



?>