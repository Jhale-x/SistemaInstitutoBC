<?php

session_start();

if (!isset($_SESSION['id_usuario'])) {
    header("Location: ../login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Evento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/calendario.css">
</head>

<body>
    <div class="container py-5">
        <h1 class="mb-4">Registrar Evento</h1>

        <form action="../../controller/CalendarioController.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Título</label>
                <input type="text" name="titulo" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Descripción</label>
                <textarea name="descripcion" class="form-control" rows="4" required></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Fecha</label>
                <input type="date" name="fecha" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Hora</label>
                <input type="time" name="hora" class="form-control" required>
            </div>

            <button type="submit" name="registrar" class="btn btn-primary">Guardar Evento</button>
        </form>
    </div>

    <script src="../../assets/js/calendario.js"></script>
</body>

</html>