<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Registrar Nota</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

</head>

<body style="background:#0f172a; color:white;">

    <div class="container py-5">

        <h1 class="mb-4">
            Registrar Nota
        </h1>

        <form action="../../controller/NotaController.php"
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

                <label>Tarea</label>

                <input type="number"
                    step="0.01"
                    name="tarea"
                    class="form-control">

            </div>

            <div class="mb-3">

                <label>Examen</label>

                <input type="number"
                    step="0.01"
                    name="examen"
                    class="form-control">

            </div>

            <button type="submit"
                name="registrar"
                class="btn btn-primary">

                Registrar Nota

            </button>

        </form>

    </div>

</body>

</html>