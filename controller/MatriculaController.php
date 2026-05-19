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

if (isset($_POST['editar'])) {

    $id = intval($_POST['id_matricula']);
    $alumno = mysqli_real_escape_string($conexion, $_POST['alumno']);
    $carrera = mysqli_real_escape_string($conexion, $_POST['carrera']);
    $curso = mysqli_real_escape_string($conexion, $_POST['curso']);
    $ciclo = mysqli_real_escape_string($conexion, $_POST['ciclo']);
    $fecha = mysqli_real_escape_string($conexion, $_POST['fecha']);
    $estado = mysqli_real_escape_string($conexion, $_POST['estado']);

    $update = "UPDATE matriculas SET alumno='$alumno', carrera='$carrera', curso='$curso', ciclo='$ciclo', fecha='$fecha', estado='$estado' WHERE id_matricula=$id";
    mysqli_query($conexion, $update);

    header("Location: ../views/matriculas/listar.php");
    exit;
}

if (isset($_POST['eliminar'])) {
    $id = intval($_POST['id_matricula']);
    $sql = "DELETE FROM matriculas WHERE id_matricula=$id";
    mysqli_query($conexion, $sql);
    header("Location: ../views/matriculas/listar.php");
    exit;
}
