<?php

include_once __DIR__ . "/../config/conexion.php";

if (isset($_POST['registrar'])) {

    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $dni = $_POST['dni'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $carrera = $_POST['carrera'];
    $ciclo = $_POST['ciclo'];
    $estado = $_POST['estado'];

    $sql = "INSERT INTO alumnos(
                nombres,
                apellidos,
                dni,
                correo,
                telefono,
                carrera,
                ciclo,
                estado
            )
            VALUES(
                '$nombres',
                '$apellidos',
                '$dni',
                '$correo',
                '$telefono',
                '$carrera',
                '$ciclo',
                '$estado'
            )";

    mysqli_query($conexion, $sql);

    header("Location: ../views/alumnos/listar.php");
    exit;
}

if (isset($_POST['editar'])) {

    $id_alumno = intval($_POST['id_alumno']);
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $dni = $_POST['dni'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $carrera = $_POST['carrera'];
    $ciclo = $_POST['ciclo'];
    $estado = $_POST['estado'];

    $sql = "UPDATE alumnos SET
                nombres = '$nombres',
                apellidos = '$apellidos',
                dni = '$dni',
                correo = '$correo',
                telefono = '$telefono',
                carrera = '$carrera',
                ciclo = '$ciclo',
                estado = '$estado'
            WHERE id_alumno = $id_alumno";

    mysqli_query($conexion, $sql);

    header("Location: ../views/alumnos/listar.php");
    exit;
}

if (isset($_POST['eliminar'])) {

    $id_alumno = intval($_POST['id_alumno']);
    $sql = "DELETE FROM alumnos WHERE id_alumno = $id_alumno";
    mysqli_query($conexion, $sql);

    header("Location: ../views/alumnos/listar.php");
    exit;
}

header("Location: ../views/alumnos/listar.php");
exit;
