<?php

include_once __DIR__ . "/../../config/conexion.php";

$id = $_GET['id'];

$sql = "SELECT * FROM horarios 
        WHERE id_horario = '$id'";

$resultado = mysqli_query($conexion, $sql);

$fila = mysqli_fetch_assoc($resultado);

if (isset($_POST['actualizar'])) {

    $curso = $_POST['curso'];
    $docente = $_POST['docente'];
    $salon = $_POST['salon'];
    $dia = $_POST['dia'];
    $hora_inicio = $_POST['hora_inicio'];
    $hora_fin = $_POST['hora_fin'];
    $estado = $_POST['estado'];

    $update = "UPDATE horarios SET

                curso = '$curso',
                docente = '$docente',
                salon = '$salon',
                dia = '$dia',
                hora_inicio = '$hora_inicio',
                hora_fin = '$hora_fin',
                estado = '$estado'

                WHERE id_horario = '$id'";

    mysqli_query($conexion, $update);

    header("Location: listar.php");
}

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Editar Horario</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

</head>

<body style="background:#0f172a; color:white;">

    <div class="container py-5">

        <h1 class="mb-4">
            Editar Horario
        </h1>

        <form method="POST">

            <input type="text"
                name="curso"
                value="<?php echo $fila['curso']; ?>"
                class="form-control mb-3">

            <input type="text"
                name="docente"
                value="<?php echo $fila['docente']; ?>"
                class="form-control mb-3">

            <input type="text"
                name="salon"
                value="<?php echo $fila['salon']; ?>"
                class="form-control mb-3">

            <select name="dia"
                class="form-control mb-3">

                <option>Lunes</option>
                <option>Martes</option>
                <option>Miércoles</option>
                <option>Jueves</option>
                <option>Viernes</option>
                <option>Sábado</option>

            </select>

            <input type="time"
                name="hora_inicio"
                value="<?php echo $fila['hora_inicio']; ?>"
                class="form-control mb-3">

            <input type="time"
                name="hora_fin"
                value="<?php echo $fila['hora_fin']; ?>"
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