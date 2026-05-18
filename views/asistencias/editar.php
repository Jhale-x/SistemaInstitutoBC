<?php

include_once __DIR__ . "/../../config/conexion.php";

$id = $_GET['id'];

$sql = "SELECT * FROM asistencias 
        WHERE id_asistencia = '$id'";

$resultado = mysqli_query($conexion, $sql);

$fila = mysqli_fetch_assoc($resultado);

if (isset($_POST['actualizar'])) {

    $alumno = $_POST['alumno'];
    $curso = $_POST['curso'];
    $fecha = $_POST['fecha'];
    $estado = $_POST['estado'];
    $observacion = $_POST['observacion'];

    $update = "UPDATE asistencias SET

                alumno = '$alumno',
                curso = '$curso',
                fecha = '$fecha',
                estado = '$estado',
                observacion = '$observacion'

                WHERE id_asistencia = '$id'";

    mysqli_query($conexion, $update);

    header("Location: listar.php");
}

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Editar Asistencia</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

</head>

<body style="background:#0f172a; color:white;">

    <div class="container py-5">

        <h1 class="mb-4">
            Editar Asistencia
        </h1>

        <form method="POST">

            <input type="text"
                name="alumno"
                value="<?php echo $fila['alumno']; ?>"
                class="form-control mb-3">

            <input type="text"
                name="curso"
                value="<?php echo $fila['curso']; ?>"
                class="form-control mb-3">

            <input type="date"
                name="fecha"
                value="<?php echo $fila['fecha']; ?>"
                class="form-control mb-3">

            <select name="estado"
                class="form-control mb-3">

                <option value="Presente">
                    Presente
                </option>

                <option value="Tardanza">
                    Tardanza
                </option>

                <option value="Falta">
                    Falta
                </option>

            </select>

            <textarea name="observacion"
                class="form-control mb-3"><?php echo $fila['observacion']; ?></textarea>

            <button type="submit"
                name="actualizar"
                class="btn btn-warning">

                Actualizar

            </button>

        </form>

    </div>

</body>

</html>