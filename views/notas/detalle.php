<?php

include_once __DIR__ . "/../../config/conexion.php";

$id = $_GET['id'];

$sql = "SELECT * FROM notas 
        WHERE id_nota = '$id'";

$resultado = mysqli_query($conexion, $sql);

$fila = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Detalle Nota</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

</head>

<body style="background:#0f172a; color:white;">

    <div class="container py-5">

        <div class="card bg-dark text-white p-4">

            <h1>
                <?php echo $fila['alumno']; ?>
            </h1>

            <p>
                <strong>Curso:</strong>
                <?php echo $fila['curso']; ?>
            </p>

            <p>
                <strong>Tarea:</strong>
                <?php echo $fila['tarea']; ?>
            </p>

            <p>
                <strong>Examen:</strong>
                <?php echo $fila['examen']; ?>
            </p>

            <p>
                <strong>Promedio:</strong>
                <?php echo $fila['promedio']; ?>
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