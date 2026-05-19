<?php
// Esqueleto editar actividad
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Actividad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/actividades.css">
</head>

<body>
    <div class="container py-5">
        <h1>Editar Actividad</h1>
        <form action="../../controller/ActividadController.php" method="POST">
            <input type="hidden" name="id_actividad" value="">
            <div class="mb-3"><label>Título</label><input type="text" name="titulo" class="form-control"></div>
            <div class="mb-3"><label>Descripción</label><textarea name="descripcion" class="form-control"></textarea></div>
            <div class="mb-3"><label>Fecha de entrega</label><input type="date" name="fecha_entrega" class="form-control"></div>
            <button type="submit" name="editar" class="btn btn-warning">Guardar</button>
        </form>
    </div>
    <script src="../../assets/js/actividades.js"></script>
</body>

</html>