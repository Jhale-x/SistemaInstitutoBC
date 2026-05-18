<?php

include_once __DIR__ . "/../../config/conexion.php";

$id = $_GET['id'];

$sql = "SELECT * FROM mensajes 
        WHERE id_mensaje = '$id'";

$resultado = mysqli_query($conexion, $sql);

$fila = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Detalle Mensaje</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

</head>

<body style="background:#0f172a; color:white;">

    <div class="container py-5">

        <div class="card bg-dark text-white p-4">

            <h2>
                <?php echo $fila['asunto']; ?>
            </h2>

            <hr>

            <p>
                <strong>Emisor:</strong>
                <?php echo $fila['emisor']; ?>
            </p>

            <p>
                <strong>Receptor:</strong>
                <?php echo $fila['receptor']; ?>
            </p>

            <p>
                <strong>Fecha:</strong>
                <?php echo $fila['fecha']; ?>
            </p>

            <p>
                <strong>Mensaje:</strong>
            </p>

            <div class="alert alert-secondary">

                <?php echo $fila['mensaje']; ?>

            </div>

            <a href="listar.php"
                class="btn btn-primary">

                Volver

            </a>

        </div>

    </div>

</body>

</html>