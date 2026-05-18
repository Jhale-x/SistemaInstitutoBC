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
$sql = "SELECT * FROM alumnos WHERE id_alumno = $id";
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

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Detalle del Alumno</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

</head>

<body style="background:#0f172a; color:white;">

    <div class="container py-5">

        <h1 class="mb-4">
            Detalle del Alumno
        </h1>

        <div class="card bg-secondary text-white mb-4">
            <div class="card-body">
                <h5 class="card-title"><?php echo htmlspecialchars($fila['nombres'] . ' ' . $fila['apellidos']); ?></h5>
                <p class="card-text"><strong>DNI:</strong> <?php echo htmlspecialchars($fila['dni']); ?></p>
                <p class="card-text"><strong>Correo:</strong> <?php echo htmlspecialchars($fila['correo']); ?></p>
                <p class="card-text"><strong>Teléfono:</strong> <?php echo htmlspecialchars($fila['telefono']); ?></p>
                <p class="card-text"><strong>Carrera:</strong> <?php echo htmlspecialchars($fila['carrera']); ?></p>
                <p class="card-text"><strong>Ciclo:</strong> <?php echo htmlspecialchars($fila['ciclo']); ?></p>
                <p class="card-text"><strong>Estado:</strong> <?php echo htmlspecialchars($fila['estado']); ?></p>
            </div>
        </div>

        <a href="listar.php" class="btn btn-primary">Volver a la lista</a>

    </div>

</body>

</html>