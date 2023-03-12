<!-- Importar Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<?php
session_start();
if (!isset($_SESSION['idUsuario'])) {
    header('location:login.php?login=0');
}

?>

</head>

<body>
    <div class="container-fluid">
        <div class="row pt-4 py-4 bg-dark">
            <a href="registroEntrada.php" class="offset-md-1 col-md-2 btn btn-dark text-center">Registrar Entrada</a>
            <a href="registroSalida.php" class="col-md-2 btn btn-dark text-center">Registrar Salida</a>
            <a href="verEntradas.php" class="col-md-2 btn btn-dark text-center">Mostrar Entradas</a>
            <a href="verSalidas.php" class="col-md-2 btn btn-dark text-center">Mostrar Salidas</a>
            <a href="balance.php" class="col-md-2 btn btn-dark text-center">Balance General</a>
            <a href="model/logout.php" class="btn btn-danger col-md-1 text-center">Salir</a>
        </div>
    </div>