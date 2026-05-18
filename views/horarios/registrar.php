<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Registrar Horario</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

</head>

<body style="background:#0f172a; color:white;">

    <div class="container py-5">

        <h1 class="mb-4">
            Registrar Horario
        </h1>

        <form action="../../controller/HorarioController.php"
            method="POST">

            <div class="mb-3">

                <label>Curso</label>

                <input type="text"
                    name="curso"
                    class="form-control">

            </div>

            <div class="mb-3">

                <label>Docente</label>

                <input type="text"
                    name="docente"
                    class="form-control">

            </div>

            <div class="mb-3">

                <label>Salón</label>

                <input type="text"
                    name="salon"
                    class="form-control">

            </div>

            <div class="mb-3">

                <label>Día</label>

                <select name="dia"
                    class="form-control">

                    <option>Lunes</option>
                    <option>Martes</option>
                    <option>Miércoles</option>
                    <option>Jueves</option>
                    <option>Viernes</option>
                    <option>Sábado</option>

                </select>

            </div>

            <div class="mb-3">

                <label>Hora Inicio</label>

                <input type="time"
                    name="hora_inicio"
                    class="form-control">

            </div>

            <div class="mb-3">

                <label>Hora Fin</label>

                <input type="time"
                    name="hora_fin"
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

                Registrar Horario

            </button>

        </form>

    </div>

</body>

</html>