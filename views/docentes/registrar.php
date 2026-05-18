<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Docente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/docentes.css">
</head>

<body>
    <div class="container py-5">
        <h1 class="mb-4">Registrar Docente</h1>

        <form action="../../controller/DocenteController.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Especialidad</label>
                <input type="text" name="especialidad" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Correo</label>
                <input type="email" name="correo" class="form-control" required>
            </div>

            <button type="submit" name="registrar" class="btn btn-primary">Registrar Docente</button>
        </form>
    </div>
    <script src="../../assets/js/docentes.js"></script>
</body>

</html>