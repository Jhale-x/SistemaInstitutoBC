<?php

session_start();

if (!isset($_SESSION['id_usuario'])) {

    header("Location: ../login.php");

    exit;
}

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Reportes</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link rel="stylesheet"
        href="../../assets/css/reportes.css">

</head>

<body>

    <div class="container py-5">

        <h1 class="mb-5">
            Módulo de Reportes
        </h1>

        <div class="row g-4">

            <div class="col-md-3">

                <div class="report-card">

                    <h3>
                        Reporte de Alumnos
                    </h3>

                    <a href="alumnos.php"
                        class="btn btn-primary">

                        Ver Reporte

                    </a>

                </div>

            </div>

            <div class="col-md-3">

                <div class="report-card">

                    <h3>
                        Reporte de Notas
                    </h3>

                    <a href="notas.php"
                        class="btn btn-success">

                        Ver Reporte

                    </a>

                </div>

            </div>

            <div class="col-md-3">

                <div class="report-card">

                    <h3>
                        Reporte de Asistencias
                    </h3>

                    <a href="asistencias.php"
                        class="btn btn-warning">

                        Ver Reporte

                    </a>

                </div>

            </div>

            <div class="col-md-3">

                <div class="report-card">

                    <h3>
                        Reporte de Matrículas
                    </h3>

                    <a href="matriculas.php"
                        class="btn btn-danger">

                        Ver Reporte

                    </a>

                </div>

            </div>

        </div>

    </div>

</body>

</html>