<?php

include_once __DIR__ . "/../../config/conexion.php";

$sql = "SELECT * FROM notas";

$resultado = mysqli_query($conexion, $sql);

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Reporte Notas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

</head>

<body style="background:#0f172a; color:white;">

    <div class="container py-5">

        <h1 class="mb-4">
            Reporte de Notas
        </h1>

        <table class="table table-dark table-bordered">

            <thead>

                <tr>

                    <th>Alumno</th>
                    <th>Curso</th>
                    <th>Tarea</th>
                    <th>Examen</th>
                    <th>Promedio</th>
                    <th>Estado</th>

                </tr>

            </thead>

            <tbody>

                <?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>

                    <tr>

                        <td><?php echo $fila['alumno']; ?></td>
                        <td><?php echo $fila['curso']; ?></td>
                        <td><?php echo $fila['tarea']; ?></td>
                        <td><?php echo $fila['examen']; ?></td>
                        <td><?php echo $fila['promedio']; ?></td>
                        <td><?php echo $fila['estado']; ?></td>

                    </tr>

                <?php } ?>

            </tbody>

        </table>

    </div>

</body>

</html>