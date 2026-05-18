<?php

session_start();

include_once __DIR__ . "/../../config/conexion.php";

$id = $_GET['id'];

$sql = "SELECT * FROM carreras 
        WHERE id_carrera = '$id'";

$resultado = mysqli_query($conexion, $sql);

$fila = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Detalle Carrera</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

</head>

<body style="background:#0f172a; color:white;">

    <div class="container py-5">

        <div class="card bg-dark text-white p-4">

            <h1 class="mb-4">
                <?php echo $fila['nombre']; ?>
            </h1>

            <p>

                <strong>Descripción:</strong>

                <br>

                <?php echo $fila['descripcion']; ?>

            </p>

            <p>

                <strong>Duración:</strong>

                <?php echo $fila['duracion']; ?>

            </p>

            <p>

                <strong>Estado:</strong>

                <?php echo $fila['estado']; ?>

            </p>

            <a href="listar.php"
                class="btn btn-primary mt-3">

                Volver

            </a>

        </div>

    </div>

</body>

</html>