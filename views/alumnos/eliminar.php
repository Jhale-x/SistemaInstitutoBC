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

    <title>Eliminar Alumno</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

</head>

<body style="background:#0f172a; color:white;">

    <div class="container py-5">

        <h1 class="mb-4 text-danger">
            Eliminar Alumno
        </h1>

        <div class="alert alert-warning text-dark">
            ¿Estás seguro de que deseas eliminar al alumno <strong><?php echo htmlspecialchars($fila['nombres'] . ' ' . $fila['apellidos']); ?></strong>?
        </div>

        <form action="../../controller/AlumnoController.php"
            method="POST">

            <input type="hidden" name="id_alumno" value="<?php echo $fila['id_alumno']; ?>">

            <button type="submit"
                name="eliminar"
                class="btn btn-danger">

                Sí, eliminar

            </button>

            <a href="listar.php" class="btn btn-secondary ms-2">Cancelar</a>

        </form>

    </div>

</body>

</html>