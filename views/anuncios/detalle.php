<?php

include_once __DIR__ . "/../../config/conexion.php";

$id = $_GET['id'];

$sql = "SELECT * FROM anuncios 
        WHERE id_anuncio = '$id'";

$resultado = mysqli_query($conexion, $sql);

$fila = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Detalle Anuncio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

</head>

<body style="background:#0f172a; color:white;">

    <div class="container py-5">

        <div class="card bg-dark text-white p-4">

            <h1>
                <?php echo $fila['titulo']; ?>
            </h1>

            <p>
                <strong>Descripción:</strong>
                <br>
                <?php echo $fila['descripcion']; ?>
            </p>

            <p>
                <strong>Docente:</strong>
                <?php echo $fila['docente']; ?>
            </p>

            <p>
                <strong>Fecha:</strong>
                <?php echo $fila['fecha']; ?>
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