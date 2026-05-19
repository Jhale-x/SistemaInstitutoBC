<?php

include_once __DIR__ . "/../../config/conexion.php";

$id = $_GET['id'];
$sql = "SELECT * FROM calendario WHERE id_evento = '$id'";
$resultado = mysqli_query($conexion, $sql);
$fila = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de Evento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/calendario.css">
</head>

<body>
    <div class="container py-5">
        <div class="card shadow-sm">
            <div class="card-body">
                <h1 class="card-title"><?php echo $fila['titulo']; ?></h1>
                <p><strong>Fecha:</strong> <?php echo $fila['fecha']; ?></p>
                <p><strong>Hora:</strong> <?php echo $fila['hora']; ?></p>
                <p><strong>Descripción:</strong></p>
                <p><?php echo $fila['descripcion']; ?></p>

                <a href="listar.php" class="btn btn-primary">Volver</a>
            </div>
        </div>
    </div>

    <script src="../../assets/js/calendario.js"></script>
</body>

</html>