<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Registrar Asistencia</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

</head>

<body style="background:#0f172a; color:white;">

    <div class="container py-5">

        <h1 class="mb-4">
            Registrar Asistencia
        </h1>

        <form action="../../controller/AsistenciaController.php"
            method="POST">

            <div class="mb-3">

                <label>Alumno</label>

                <input type="text"
                    name="alumno"
                    class="form-control">

            </div>

            <div class="mb-3">

                <label>Curso</label>

                <input type="text"
                    name="curso"
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

                    <option value="Presente">
                        Presente
                    </option>

                    <option value="Tardanza">
                        Tardanza
                    </option>

                    <option value="Falta">
                        Falta
                    </option>

                </select>

            </div>

            <div class="mb-3">

                <label>Observación</label>

                <textarea name="observacion"
                    class="form-control"
                    rows="4"></textarea>

            </div>

            <button type="submit"
                name="registrar"
                class="btn btn-primary">

                Registrar Asistencia

            </button>

        </form>

    </div>

</body>

</html>