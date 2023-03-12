<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Inicio de Sesión</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <?php
    session_start();
    if (isset($_SESSION['idUsuario'])) {
        header('location:balance.php');
    }
    ?>

</head>

<body class="vh-100 bg-warning d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-success bg-gradient text-white">
                        <h4 class="text-center">Inicio de Sesión</h4>
                    </div>
                    <div class="card-body">
                        <img src="privImg/logo1.png" alt="Gestión Financiera - LIS941" class="mx-auto d-block">
                        <form action="model/loginUsuario.php" method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo Electrónico:</label>
                                <input type="email" class="form-control" name="email" id="email" />
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña:</label>
                                <input type="password" class="form-control" name="password" id="password" />
                            </div>
                            <!--
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="rememberMe" />
                                <label class="form-check-label" for="rememberMe">
                                    Recordar Mis Credenciales
                                </label>
                            </div>
                            -->
                            <button type="submit" class="btn btn-primary">
                                Iniciar Sesión
                            </button>
                            <a class="btn btn-success" href="registro.php">Regístrate</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    require('template/footer.php');

    if (isset($_GET['registro'])) {
        if ($_GET['registro'] == 1) {
            echo
            "<script>Swal.fire('Registro Completado','¡Te has registrado satisfactoriamente!','success');</script>";
        }
    }

    if (isset($_GET['login'])) {
        if ($_GET['login'] == 0) {
            echo
            "<script>Swal.fire('Aviso','Debes Iniciar Sesión Previamente','warning');</script>";
        }
        if ($_GET['login'] == 1) {
            echo
            "<script>Swal.fire('Error','Credenciales Erróneas','error');</script>";
        }
    }
    ?>

</body>

</html>