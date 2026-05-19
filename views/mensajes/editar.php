<?php

include_once __DIR__ . "/../../config/conexion.php";

$id = intval($_GET['id']);
$sql = "SELECT * FROM mensajes WHERE id_mensaje = '$id'";
$resultado = mysqli_query($conexion, $sql);
$fila = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Mensaje</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/mensajes.css">
</head>

<body>
    <div class="container py-5">
        <h1 class="mb-4">Editar Mensaje</h1>

        <form action="../../controller/MensajeController.php" method="POST">
            <input type="hidden" name="id_mensaje" value="<?php echo $fila['id_mensaje']; ?>">

            <div class="mb-3">
                <label class="form-label">Emisor</label>
                <input type="text" name="emisor" value="<?php echo $fila['emisor']; ?>" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Receptor</label>
                <input type="text" name="receptor" value="<?php echo $fila['receptor']; ?>" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Asunto</label>
                <input type="text" name="asunto" value="<?php echo $fila['asunto']; ?>" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Mensaje</label>
                <textarea name="mensaje" class="form-control" rows="5" required><?php echo $fila['mensaje']; ?></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Estado</label>
                <select name="estado" class="form-control" required>
                    <option value="Enviado" <?php echo ($fila['estado'] === 'Enviado') ? 'selected' : ''; ?>>Enviado</option>
                    <option value="Leído" <?php echo ($fila['estado'] === 'Leído') ? 'selected' : ''; ?>>Leído</option>
                </select>
            </div>

            <button type="submit" name="editar" class="btn btn-warning">Actualizar Mensaje</button>
        </form>
    </div>
</body>

</html>
