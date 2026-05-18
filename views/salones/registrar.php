<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Registrar Salón</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

</head>

<body style="background:#0f172a; color:white;">

    <div class="container py-5">

        <h1 class="mb-4">
            Registrar Salón
        </h1>

        <form action="../../controller/SalonController.php"
            method="POST">

            <div class="mb-3">

                <label>Nombre</label>

                <input type="text"
                    name="nombre"
                    class="form-control"
                    required>

            </div>

            <div class="mb-3">

                <label>Capacidad</label>

                <input type="number"
                    name="capacidad"
                    class="form-control">

            </div>

            <div class="mb-3">

                <label>Ubicación</label>

                <input type="text"
                    name="ubicacion"
                    class="form-control">

            </div>

            <div class="mb-3">

                <label>Carrera</label>

                <input type="text"
                    name="carrera"
                    class="form-control">

            </div>

            <div class="mb-3">

                <label>Estado</label>

                <select name="estado"
                    class="form-control">

                    <option value="Activo">
                        Activo
                    </option>

                    <option value="Inactivo">
                        Inactivo
                    </option>

                </select>

            </div>

            <button type="submit"
                name="registrar"
                class="btn btn-primary">

                Registrar Salón

            </button>

        </form>

    </div>

</body>

</html>