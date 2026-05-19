<?php

include_once __DIR__ . "/../config/conexion.php";

// Registrar reporte
if (isset($_POST['registrar'])) {
    $titulo = mysqli_real_escape_string($conexion, $_POST['titulo']);
    $descripcion = mysqli_real_escape_string($conexion, $_POST['descripcion']);
    $autor = mysqli_real_escape_string($conexion, $_POST['autor']);
    $fecha = mysqli_real_escape_string($conexion, $_POST['fecha']);

    $sql = "INSERT INTO reportes(titulo, descripcion, autor, fecha) VALUES('$titulo', '$descripcion', '$autor', '$fecha')";
    mysqli_query($conexion, $sql);
    header('Location: ../views/reportes/listar.php');
    exit;
}

// Editar reporte
if (isset($_POST['editar'])) {
    $id = intval($_POST['id_reporte']);
    $titulo = mysqli_real_escape_string($conexion, $_POST['titulo']);
    $descripcion = mysqli_real_escape_string($conexion, $_POST['descripcion']);
    $autor = mysqli_real_escape_string($conexion, $_POST['autor']);
    $fecha = mysqli_real_escape_string($conexion, $_POST['fecha']);

    $update = "UPDATE reportes SET titulo='$titulo', descripcion='$descripcion', autor='$autor', fecha='$fecha' WHERE id_reporte=$id";
    mysqli_query($conexion, $update);
    header('Location: ../views/reportes/listar.php');
    exit;
}

// Eliminar reporte
if (isset($_POST['eliminar'])) {
    $id = intval($_POST['id_reporte']);
    $sql = "DELETE FROM reportes WHERE id_reporte=$id";
    mysqli_query($conexion, $sql);
    header('Location: ../views/reportes/listar.php');
    exit;
}

header('Location: ../views/reportes/listar.php');
exit;
