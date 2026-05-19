<?php
// Vista listar actividades (esqueleto)
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/actividades.css">
</head>

<body>
    <div class="container py-5">
        <h1>Actividades</h1>
        <a href="registrar.php" class="btn btn-primary mb-3">Nueva Actividad</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- filas -->
            </tbody>
        </table>
    </div>
    <script src="../../assets/js/actividades.js"></script>
</body>

</html>