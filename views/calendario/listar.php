<?php

session_start();

if (!isset($_SESSION['id_usuario'])) {
    header("Location: ../login.php");
    exit;
}

include_once __DIR__ . "/../../config/conexion.php";

$sql = "SELECT * FROM calendario";
$resultado = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/calendario.css">
</head>

<body>
    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Calendario</h1>
            <a href="registrar.php" class="btn btn-primary">Nuevo Evento</a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>
                        <tr>
                            <td><?php echo $fila['id_evento']; ?></td>
                            <td><?php echo $fila['titulo']; ?></td>
                            <td><?php echo $fila['fecha']; ?></td>
                            <td><?php echo $fila['hora']; ?></td>
                            <td>
                                <a href="detalle.php?id=<?php echo $fila['id_evento']; ?>" class="btn btn-sm btn-info">Ver</a>
                                <a href="editar.php?id=<?php echo $fila['id_evento']; ?>" class="btn btn-sm btn-warning">Editar</a>
                                <a href="eliminar.php?id=<?php echo $fila['id_evento']; ?>" class="btn btn-sm btn-danger">Eliminar</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="../../assets/js/calendario.js"></script>
</body>

</html>