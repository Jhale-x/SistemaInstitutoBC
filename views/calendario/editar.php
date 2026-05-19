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
    <title>Editar Evento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/calendario.css">
</head>

<body>
    <div class="container py-5">
        <h1 class="mb-4">Editar Evento</h1>

        <form action="../../controller/CalendarioController.php" method="POST">
            <input type="hidden" name="id_evento" value="<?php echo $fila['id_evento']; ?>">

            <div class="mb-3">
                <label class="form-label">Título</label>
                <input type="text" name="titulo" value="<?php echo $fila['titulo']; ?>" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Descripción</label>
                <textarea name="descripcion" class="form-control" rows="4" required><?php echo $fila['descripcion']; ?></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Fecha</label>
                <input type="date" name="fecha" value="<?php echo $fila['fecha']; ?>" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Hora</label>
                <input type="time" name="hora" value="<?php echo $fila['hora']; ?>" class="form-control" required>
            </div>

            <button type="submit" name="editar" class="btn btn-warning">Actualizar Evento</button>
        </form>
    </div>

    <script src="../../assets/js/calendario.js"></script>
</body>

</html>