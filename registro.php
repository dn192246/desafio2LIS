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

<body class="vh-100 bg-gradient bg-warning d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-success bg-gradient text-white">
                        <h4 class="text-center">Registro de Usuarios</h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo Electrónico:</label>
                                <input type="email" class="form-control" id="email" />
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña:</label>
                                <input type="password" class="form-control" id="password" />
                            </div>
                            <div class="mb-3">
                                <label for="password-verify" class="form-label">Verificar Contraseña:</label>
                                <input type="password" class="form-control" id="password-verify" />
                            </div>
                            <button type="submit" class="btn btn-primary">
                                Registrarme
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
	require('template/footer.php')
	?>
    
</body>

</html>