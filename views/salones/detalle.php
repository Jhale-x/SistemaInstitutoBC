<?php

include_once __DIR__ . "/../../config/conexion.php";

$id = $_GET['id'];

$sql = "SELECT * FROM salones 
        WHERE id_salon = '$id'";

$resultado = mysqli_query($conexion, $sql);

$fila = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Detalle Salón</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

</head>

<body style="background:#0f172a; color:white;">

    <div class="container py-5">

        <div class="card bg-dark text-white p-4">

            <h1>
                <?php echo $fila['nombre']; ?>
            </h1>

            <p>
                <strong>Capacidad:</strong>
                <?php echo $fila['capacidad']; ?>
            </p>

            <p>
                <strong>Ubicación:</strong>
                <?php echo $fila['ubicacion']; ?>
            </p>

            <p>
                <strong>Carrera:</strong>
                <?php echo $fila['carrera']; ?>
            </p>

            <p>
                <strong>Estado:</strong>
                <?php echo $fila['estado']; ?>
            </p>

            <a href="listar.php"
                class="btn btn-primary">

                Volver

            </a>

        </div>

    </div>

</body>

</html>