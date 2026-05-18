<?php

include_once __DIR__ . "/../../config/conexion.php";

$id = $_GET['id'];

$sql = "SELECT * FROM salones 
        WHERE id_salon = '$id'";

$resultado = mysqli_query($conexion, $sql);

$fila = mysqli_fetch_assoc($resultado);

if (isset($_POST['actualizar'])) {

    $nombre = $_POST['nombre'];
    $capacidad = $_POST['capacidad'];
    $ubicacion = $_POST['ubicacion'];
    $carrera = $_POST['carrera'];
    $estado = $_POST['estado'];

    $update = "UPDATE salones SET

                nombre = '$nombre',
                capacidad = '$capacidad',
                ubicacion = '$ubicacion',
                carrera = '$carrera',
                estado = '$estado'

                WHERE id_salon = '$id'";

    mysqli_query($conexion, $update);

    header("Location: listar.php");
}

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Editar Salón</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

</head>

<body style="background:#0f172a; color:white;">

    <div class="container py-5">

        <h1 class="mb-4">
            Editar Salón
        </h1>

        <form method="POST">

            <input type="text"
                name="nombre"
                value="<?php echo $fila['nombre']; ?>"
                class="form-control mb-3">

            <input type="number"
                name="capacidad"
                value="<?php echo $fila['capacidad']; ?>"
                class="form-control mb-3">

            <input type="text"
                name="ubicacion"
                value="<?php echo $fila['ubicacion']; ?>"
                class="form-control mb-3">

            <input type="text"
                name="carrera"
                value="<?php echo $fila['carrera']; ?>"
                class="form-control mb-3">

            <select name="estado"
                class="form-control mb-3">

                <option value="Activo">
                    Activo
                </option>

                <option value="Inactivo">
                    Inactivo
                </option>

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