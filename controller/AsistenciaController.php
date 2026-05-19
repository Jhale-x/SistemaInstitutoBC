<?php

include_once __DIR__ . "/../config/conexion.php";

/* REGISTRAR ASISTENCIA */

if (isset($_POST['registrar'])) {

    $alumno = $_POST['alumno'];
    $curso = $_POST['curso'];
    $fecha = $_POST['fecha'];
    $estado = $_POST['estado'];
    $observacion = $_POST['observacion'];

    $sql = "INSERT INTO asistencias(

                alumno,
                curso,
                fecha,
                estado,
                observacion

            )

            VALUES(

                '$alumno',
                '$curso',
                '$fecha',
                '$estado',
                '$observacion'

            )";

    mysqli_query($conexion, $sql);

    header("Location: ../views/asistencias/listar.php");
}

if (isset($_POST['editar'])) {

    $id = intval($_POST['id_asistencia']);
    $alumno = mysqli_real_escape_string($conexion, $_POST['alumno']);
    $curso = mysqli_real_escape_string($conexion, $_POST['curso']);
    $fecha = mysqli_real_escape_string($conexion, $_POST['fecha']);
    $estado = mysqli_real_escape_string($conexion, $_POST['estado']);
    $observacion = mysqli_real_escape_string($conexion, $_POST['observacion']);

    $update = "UPDATE asistencias SET alumno='$alumno', curso='$curso', fecha='$fecha', estado='$estado', observacion='$observacion' WHERE id_asistencia=$id";
    mysqli_query($conexion, $update);

    header("Location: ../views/asistencias/listar.php");
    exit;
}

if (isset($_POST['eliminar'])) {
    $id = intval($_POST['id_asistencia']);
    $sql = "DELETE FROM asistencias WHERE id_asistencia=$id";
    mysqli_query($conexion, $sql);
    header("Location: ../views/asistencias/listar.php");
    exit;
}
