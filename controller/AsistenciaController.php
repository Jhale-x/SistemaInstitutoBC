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
