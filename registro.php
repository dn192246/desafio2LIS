<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Registro de Usuarios</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body class="vh-100 bg-warning d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-success bg-gradient text-white">
                        <h4 class="text-center">Registro de Usuarios</h4>
                    </div>
                    <div class="card-body">
                        <img src="privImg/logo1.png" alt="Gestión Financiera - LIS941" class="mx-auto d-block">
                        <form action="model/registroUsuario.php" method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo Electrónico:</label>
                                <input type="email" class="form-control" name="email" id="email" required />
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña:</label>
                                <input type="password" class="form-control" id="password" name="password" required />
                            </div>
                            <div class="mb-3">
                                <label for="password-verify" class="form-label">Verificar Contraseña:</label>
                                <input type="password" class="form-control" name="password-verify" id="password-verify" required />
                            </div>
                            <button type="button" onclick="validarClaves()" class="btn btn-primary">
                                Registrarme
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    require('template/footer.php');

    if (isset($_GET['error'])) {
        if ($_GET['error'] == 1) {
            echo
            "<script>Swal.fire('Error','Las contraseñas no son iguales','error');</script>";
        } else if ($_GET['error'] == 2) {
            echo
            "<script>Swal.fire('Error','Ya se ha registrado un usuario con esa dirección de correo electrónico','error');</script>";
        } else if ($_GET['error'] == 3) {
            echo
            "<script>Swal.fire('Error','Se produjo un error, por favor intente más tarde','error');</script>";
        }
    }
    ?>

</body>


<script>
    function validarClaves() {
        var c1 = document.getElementById("password").value;
        var c2 = document.getElementById("password-verify").value;

        if (c1 === c2) {
            document.forms[0].submit();
        } else {
            Swal.fire(
                'Error',
                'Las contraseñas no son iguales',
                'warning'
            )
        }
    }
</script>

</html>