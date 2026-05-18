<?php

include_once __DIR__ . "/../../config/conexion.php";

$id = $_GET['id'];

$sql = "SELECT * FROM cursos 
        WHERE id_curso = '$id'";

$resultado = mysqli_query($conexion, $sql);

$fila = mysqli_fetch_assoc($resultado);

if (isset($_POST['actualizar'])) {

    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $creditos = $_POST['creditos'];
    $ciclo = $_POST['ciclo'];
    $docente = $_POST['docente'];
    $carrera = $_POST['carrera'];
    $estado = $_POST['estado'];

    $update = "UPDATE cursos SET

                nombre = '$nombre',
                descripcion = '$descripcion',
                creditos = '$creditos',
                ciclo = '$ciclo',
                docente = '$docente',
                carrera = '$carrera',
                estado = '$estado'

                WHERE id_curso = '$id'";

    mysqli_query($conexion, $update);

    header("Location: listar.php");
}

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Editar Curso</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

</head>

<body style="background:#0f172a; color:white;">

    <div class="container py-5">

        <h1 class="mb-4">Editar Curso</h1>

        <form method="POST">

            <input type="text"
                name="nombre"
                value="<?php echo $fila['nombre']; ?>"
                class="form-control mb-3">

            <textarea name="descripcion"
                class="form-control mb-3"><?php echo $fila['descripcion']; ?></textarea>

            <input type="number"
                name="creditos"
                value="<?php echo $fila['creditos']; ?>"
                class="form-control mb-3">

            <input type="text"
                name="ciclo"
                value="<?php echo $fila['ciclo']; ?>"
                class="form-control mb-3">

            <input type="text"
                name="docente"
                value="<?php echo $fila['docente']; ?>"
                class="form-control mb-3">

            <input type="text"
                name="carrera"
                value="<?php echo $fila['carrera']; ?>"
                class="form-control mb-3">

            <select name="estado"
                class="form-control mb-3">

                <option value="Activo">Activo</option>

                <option value="Inactivo">Inactivo</option>

            </select>

            <button type="submit"
                name="actualizar"
                class="btn btn-warning">

                Actualizar

            </button>

        </form>

    </div>

</body>

</html>