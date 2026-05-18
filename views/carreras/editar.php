<?php

session_start();

include_once __DIR__ . "/../../config/conexion.php";

$id = $_GET['id'];

$sql = "SELECT * FROM carreras 
        WHERE id_carrera = '$id'";

$resultado = mysqli_query($conexion, $sql);

$fila = mysqli_fetch_assoc($resultado);

/* ACTUALIZAR */

if (isset($_POST['actualizar'])) {

    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $duracion = $_POST['duracion'];
    $estado = $_POST['estado'];

    $update = "UPDATE carreras SET

                nombre = '$nombre',
                descripcion = '$descripcion',
                duracion = '$duracion',
                estado = '$estado'

                WHERE id_carrera = '$id'";

    mysqli_query($conexion, $update);

    header("Location: listar.php");
}

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Editar Carrera</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

</head>

<body style="background:#0f172a; color:white;">

    <div class="container py-5">

        <h1 class="mb-4">
            Editar Carrera
        </h1>

        <form method="POST">

            <div class="mb-3">

                <label>Nombre</label>

                <input type="text"
                    name="nombre"
                    value="<?php echo $fila['nombre']; ?>"
                    class="form-control">

            </div>

            <div class="mb-3">

                <label>Descripción</label>

                <textarea name="descripcion"
                    class="form-control"
                    rows="4"><?php echo $fila['descripcion']; ?></textarea>

            </div>

            <div class="mb-3">

                <label>Duración</label>

                <input type="text"
                    name="duracion"
                    value="<?php echo $fila['duracion']; ?>"
                    class="form-control">

            </div>

            <div class="mb-3">

                <label>Estado</label>

                <select name="estado"
                    class="form-control">

                    <option value="Activo">
                        Activo
                    </option>

                    <option value="Inactivo">
                        Inactivo
                    </option>

                </select>

            </div>

            <button type="submit"
                name="actualizar"
                class="btn btn-warning">

                Actualizar

            </button>

        </form>

    </div>

</body>

</html>