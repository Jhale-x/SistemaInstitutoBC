<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Registrar Matrícula</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

</head>

<body style="background:#0f172a; color:white;">

    <div class="container py-5">

        <h1 class="mb-4">
            Registrar Matrícula
        </h1>

        <form action="../../controller/MatriculaController.php"
            method="POST">

            <div class="mb-3">

                <label>Alumno</label>

                <input type="text"
                    name="alumno"
                    class="form-control">

            </div>

            <div class="mb-3">

                <label>Carrera</label>

                <input type="text"
                    name="carrera"
                    class="form-control">

            </div>

            <div class="mb-3">

                <label>Curso</label>

                <input type="text"
                    name="curso"
                    class="form-control">

            </div>

            <div class="mb-3">

                <label>Ciclo</label>

                <input type="text"
                    name="ciclo"
                    class="form-control">

            </div>

            <div class="mb-3">

                <label>Fecha</label>

                <input type="date"
                    name="fecha"
                    class="form-control">

            </div>

            <div class="mb-3">

                <label>Estado</label>

                <select name="estado"
                    class="form-control">

                    <option value="Activo">
                        Activo
                    </option>

                    <option value="Retirado">
                        Retirado
                    </option>

                </select>

            </div>

            <button type="submit"
                name="registrar"
                class="btn btn-primary">

                Registrar Matrícula

            </button>

        </form>

    </div>

</body>

</html>