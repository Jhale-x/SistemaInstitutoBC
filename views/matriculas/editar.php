<?php

include_once __DIR__ . "/../../config/conexion.php";

$id = $_GET['id'];

$sql = "SELECT * FROM matriculas 
        WHERE id_matricula = '$id'";

$resultado = mysqli_query($conexion, $sql);

$fila = mysqli_fetch_assoc($resultado);

if (isset($_POST['actualizar'])) {

    $alumno = $_POST['alumno'];
    $carrera = $_POST['carrera'];
    $curso = $_POST['curso'];
    $ciclo = $_POST['ciclo'];
    $fecha = $_POST['fecha'];
    $estado = $_POST['estado'];

    $update = "UPDATE matriculas SET

                alumno = '$alumno',
                carrera = '$carrera',
                curso = '$curso',
                ciclo = '$ciclo',
                fecha = '$fecha',
                estado = '$estado'

                WHERE id_matricula = '$id'";

    mysqli_query($conexion, $update);

    header("Location: listar.php");
}

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Editar Matrícula</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

</head>

<body style="background:#0f172a; color:white;">

    <div class="container py-5">

        <h1 class="mb-4">
            Editar Matrícula
        </h1>

        <form method="POST">

            <input type="text"
                name="alumno"
                value="<?php echo $fila['alumno']; ?>"
                class="form-control mb-3">

            <input type="text"
                name="carrera"
                value="<?php echo $fila['carrera']; ?>"
                class="form-control mb-3">

            <input type="text"
                name="curso"
                value="<?php echo $fila['curso']; ?>"
                class="form-control mb-3">

            <input type="text"
                name="ciclo"
                value="<?php echo $fila['ciclo']; ?>"
                class="form-control mb-3">

            <input type="date"
                name="fecha"
                value="<?php echo $fila['fecha']; ?>"
                class="form-control mb-3">

            <select name="estado"
                class="form-control mb-3">

                <option value="Activo">
                    Activo
                </option>

                <option value="Retirado">
                    Retirado
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