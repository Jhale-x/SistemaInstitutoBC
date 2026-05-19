<?php

include_once __DIR__ . "/../config/conexion.php";

if (isset($_POST['registrar'])) {

    $titulo = mysqli_real_escape_string($conexion, $_POST['titulo']);
    $descripcion = mysqli_real_escape_string($conexion, $_POST['descripcion']);
    $fecha = mysqli_real_escape_string($conexion, $_POST['fecha']);
    $hora = mysqli_real_escape_string($conexion, $_POST['hora']);

    $sql = "INSERT INTO calendario(titulo, descripcion, fecha, hora) VALUES('$titulo', '$descripcion', '$fecha', '$hora')";
    mysqli_query($conexion, $sql);
    header('Location: ../views/calendario/listar.php');
    exit;
}

if (isset($_POST['editar'])) {
    $id = intval($_POST['id_evento']);
    $titulo = mysqli_real_escape_string($conexion, $_POST['titulo']);
    $descripcion = mysqli_real_escape_string($conexion, $_POST['descripcion']);
    $fecha = mysqli_real_escape_string($conexion, $_POST['fecha']);
    $hora = mysqli_real_escape_string($conexion, $_POST['hora']);

    $update = "UPDATE calendario SET titulo='$titulo', descripcion='$descripcion', fecha='$fecha', hora='$hora' WHERE id_evento=$id";
    mysqli_query($conexion, $update);
    header('Location: ../views/calendario/listar.php');
    exit;
}

if (isset($_POST['eliminar'])) {
    $id = intval($_POST['id_evento']);
    $sql = "DELETE FROM calendario WHERE id_evento=$id";
    mysqli_query($conexion, $sql);
    header('Location: ../views/calendario/listar.php');
    exit;
}

header('Location: ../views/calendario/listar.php');
exit;
