<?php
// Esqueleto eliminar actividad
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Actividad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/actividades.css">
</head>

<body>
    <div class="container py-5">
        <h1 class="text-danger">Eliminar Actividad</h1>
        <form action="../../controller/ActividadController.php" method="POST">
            <input type="hidden" name="id_actividad" value="">
            <p>¿Seguro que deseas eliminar esta actividad?</p>
            <button type="submit" name="eliminar" class="btn btn-danger">Eliminar</button>
            <a href="listar.php" class="btn btn-secondary ms-2">Cancelar</a>
        </form>
    </div>
    <script src="../../assets/js/actividades.js"></script>
</body>

</html>