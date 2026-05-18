<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Registrar Carrera</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

</head>

<body style="background:#0f172a; color:white;">

    <div class="container py-5">

        <h1 class="mb-4">
            Registrar Carrera
        </h1>

        <form action="../../controller/CarreraController.php"
            method="POST">

            <div class="mb-3">

                <label>Nombre</label>

                <input type="text"
                    name="nombre"
                    class="form-control"
                    required>

            </div>

            <div class="mb-3">

                <label>Descripción</label>

                <textarea name="descripcion"
                    class="form-control"
                    rows="4"></textarea>

            </div>

            <div class="mb-3">

                <label>Duración</label>

                <input type="text"
                    name="duracion"
                    class="form-control"
                    placeholder="3 años">

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

                Registrar Carrera

            </button>

        </form>

    </div>

</body>

</html>