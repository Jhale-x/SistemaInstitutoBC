<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Registrar Alumno</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

</head>

<body style="background:#0f172a; color:white;">

    <div class="container py-5">

        <h1 class="mb-4">
            Registrar Alumno
        </h1>

        <form action="../../controller/AlumnoController.php"
            method="POST">

            <div class="row">

                <div class="col-md-6 mb-3">

                    <label>Nombres</label>

                    <input type="text"
                        name="nombres"
                        class="form-control"
                        required>

                </div>

                <div class="col-md-6 mb-3">

                    <label>Apellidos</label>

                    <input type="text"
                        name="apellidos"
                        class="form-control"
                        required>

                </div>

                <div class="col-md-6 mb-3">

                    <label>DNI</label>

                    <input type="text"
                        name="dni"
                        class="form-control"
                        required>

                </div>

                <div class="col-md-6 mb-3">

                    <label>Correo</label>

                    <input type="email"
                        name="correo"
                        class="form-control"
                        required>

                </div>

                <div class="col-md-6 mb-3">

                    <label>Teléfono</label>

                    <input type="text"
                        name="telefono"
                        class="form-control">

                </div>

                <div class="col-md-6 mb-3">

                    <label>Carrera</label>

                    <input type="text"
                        name="carrera"
                        class="form-control">

                </div>

                <div class="col-md-6 mb-3">

                    <label>Ciclo</label>

                    <input type="text"
                        name="ciclo"
                        class="form-control">

                </div>

                <div class="col-md-6 mb-3">

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

            </div>

            <button type="submit"
                name="registrar"
                class="btn btn-primary">

                Registrar Alumno

            </button>

        </form>

    </div>

</body>

</html>