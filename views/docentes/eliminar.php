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
    <title>Eliminar Docente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/docentes.css">
</head>

<body>
    <div class="container py-5">
        <h1 class="mb-4 text-danger">Eliminar Docente</h1>
        <div class="alert alert-warning">
            ¿Estás seguro de eliminar al docente <strong><?php echo htmlspecialchars($fila['nombre']); ?></strong>?
        </div>

        <form action="../../controller/DocenteController.php" method="POST">
            <input type="hidden" name="id_docente" value="<?php echo $fila['id_docente']; ?>">
            <button type="submit" name="eliminar" class="btn btn-danger">Sí, eliminar</button>
            <a href="listar.php" class="btn btn-secondary ms-2">Cancelar</a>
        </form>
    </div>
    <script src="../../assets/js/docentes.js"></script>
</body>

</html>