<?php

include_once __DIR__ . "/../config/conexion.php";

/* REGISTRAR NOTA */

if (isset($_POST['registrar'])) {

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

    $sql = "INSERT INTO notas(

                alumno,
                curso,
                tarea,
                examen,
                promedio,
                estado

            )

            VALUES(

                '$alumno',
                '$curso',
                '$tarea',
                '$examen',
                '$promedio',
                '$estado'

            )";

    mysqli_query($conexion, $sql);

    header("Location: ../views/notas/listar.php");
}

if (isset($_POST['editar'])) {

    $id = intval($_POST['id_nota']);
    $alumno = mysqli_real_escape_string($conexion, $_POST['alumno']);
    $curso = mysqli_real_escape_string($conexion, $_POST['curso']);
    $tarea = floatval($_POST['tarea']);
    $examen = floatval($_POST['examen']);

    $promedio = ($tarea + $examen) / 2;
    $estado = ($promedio >= 13) ? 'Aprobado' : 'Desaprobado';

    $update = "UPDATE notas SET alumno='$alumno', curso='$curso', tarea='$tarea', examen='$examen', promedio='$promedio', estado='$estado' WHERE id_nota=$id";
    mysqli_query($conexion, $update);

    header("Location: ../views/notas/listar.php");
    exit;
}

if (isset($_POST['eliminar'])) {
    $id = intval($_POST['id_nota']);
    $sql = "DELETE FROM notas WHERE id_nota=$id";
    mysqli_query($conexion, $sql);
    header("Location: ../views/notas/listar.php");
    exit;
}
