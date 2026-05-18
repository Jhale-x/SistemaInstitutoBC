<?php

include_once __DIR__ . "/../config/conexion.php";

/* REGISTRAR MATRICULA */

if (isset($_POST['registrar'])) {

    $alumno = $_POST['alumno'];
    $carrera = $_POST['carrera'];
    $curso = $_POST['curso'];
    $ciclo = $_POST['ciclo'];
    $fecha = $_POST['fecha'];
    $estado = $_POST['estado'];

    $sql = "INSERT INTO matriculas(

                alumno,
                carrera,
                curso,
                ciclo,
                fecha,
                estado

            )

            VALUES(

                '$alumno',
                '$carrera',
                '$curso',
                '$ciclo',
                '$fecha',
                '$estado'

            )";

    mysqli_query($conexion, $sql);

    header("Location: ../views/matriculas/listar.php");
}
