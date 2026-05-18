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
