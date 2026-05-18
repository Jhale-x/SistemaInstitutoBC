<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Registrar Usuario</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

</head>

<body style="background:#0f172a; color:white;">

    <div class="container py-5">

        <h1 class="mb-4">
            Registrar Usuario
        </h1>

        <form action="../../controller/UsuarioController.php"
            method="POST">

            <div class="mb-3">

                <label>
                    Nombre
                </label>

                <input type="text"
                    name="nombre"
                    class="form-control"
                    required>

            </div>

            <div class="mb-3">

                <label>
                    Correo
                </label>

                <input type="email"
                    name="correo"
                    class="form-control"
                    required>

            </div>

            <div class="mb-3">

                <label>
                    Contraseña
                </label>

                <input type="password"
                    name="password"
                    class="form-control"
                    required>

            </div>

            <button type="submit"
                name="registrar"
                class="btn btn-primary">

                Registrar

            </button>

        </form>

    </div>

</body>

</html>