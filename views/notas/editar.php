<?php

include_once __DIR__ . "/../../config/conexion.php";

$id = $_GET['id'];

$sql = "SELECT * FROM notas 
        WHERE id_nota = '$id'";

$resultado = mysqli_query($conexion, $sql);

$fila = mysqli_fetch_assoc($resultado);

if (isset($_POST['actualizar'])) {

    $alumno = $_POST['alumno'];
    $curso = $_POST['curso'];
    $tarea = $_POST['tarea'];
    $examen = $_POST['examen'];

    $promedio = ($tarea + $examen) / 2;

    if ($promedio >= 13) {

        $estado = "Aprobado";
    } else {

        $estado = "Desaprobado";
    }

    $update = "UPDATE notas SET

                alumno = '$alumno',
                curso = '$curso',
                tarea = '$tarea',
                examen = '$examen',
                promedio = '$promedio',
                estado = '$estado'

                WHERE id_nota = '$id'";

    mysqli_query($conexion, $update);

    header("Location: listar.php");
}

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Editar Nota</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

</head>

<body style="background:#0f172a; color:white;">

    <div class="container py-5">

        <h1 class="mb-4">
            Editar Nota
        </h1>

        <form action="../../controller/NotaController.php" method="POST">

            <input type="hidden" name="id_nota" value="<?php echo $fila['id_nota']; ?>">

            <input type="text"
                name="alumno"
                value="<?php echo $fila['alumno']; ?>"
                class="form-control mb-3"
                placeholder="Alumno">

            <input type="text"
                name="curso"
                value="<?php echo $fila['curso']; ?>"
                class="form-control mb-3"
                placeholder="Curso">

            <input type="number"
                step="0.01"
                name="tarea"
                value="<?php echo $fila['tarea']; ?>"
                class="form-control mb-3"
                placeholder="Tarea">

            <input type="number"
                step="0.01"
                name="examen"
                value="<?php echo $fila['examen']; ?>"
                class="form-control mb-3"
                placeholder="Examen">

            <button type="submit"
                name="editar"
                class="btn btn-warning">

                Actualizar

            </button>

        </form>

    </div>

</body>

</html>