<?php

session_start();

if (!isset($_SESSION['id_usuario'])) {
    header("Location: ../login.php");
    exit;
}

include_once __DIR__ . "/../../config/conexion.php";

if (!isset($_GET['id'])) {
    header("Location: listar.php");
    exit;
}

$id = intval($_GET['id']);
$sql = "SELECT * FROM docentes WHERE id_docente = $id";
$resultado = mysqli_query($conexion, $sql);
$fila = mysqli_fetch_assoc($resultado);

if (!$fila) {
    header("Location: listar.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Docente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/docentes.css">
</head>

<body>
    <div class="container py-5">
        <h1 class="mb-4">Detalle del Docente</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?php echo htmlspecialchars($fila['nombre']); ?></h5>
                <p class="card-text"><strong>Especialidad:</strong> <?php echo htmlspecialchars($fila['especialidad']); ?></p>
                <p class="card-text"><strong>Correo:</strong> <?php echo htmlspecialchars($fila['correo']); ?></p>
            </div>
        </div>

        <a href="listar.php" class="btn btn-primary mt-3">Volver a la lista</a>
    </div>
    <script src="../../assets/js/docentes.js"></script>
</body>

</html>