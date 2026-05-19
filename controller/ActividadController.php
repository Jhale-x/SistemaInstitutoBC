<?php
include_once __DIR__ . "/../config/conexion.php";

if (isset($_POST['registrar'])) {
    $titulo = $_POST['titulo'] ?? '';
    $descripcion = $_POST['descripcion'] ?? '';
    $fecha_entrega = $_POST['fecha_entrega'] ?? null;

    $sql = "INSERT INTO actividades (titulo, descripcion, fecha_entrega) VALUES ('" . mysqli_real_escape_string($conexion, $titulo) . "', '" . mysqli_real_escape_string($conexion, $descripcion) . "', '$fecha_entrega')";
    mysqli_query($conexion, $sql);
    header('Location: ../views/actividades/listar.php');
    exit;
}

if (isset($_POST['editar'])) {
    $id = intval($_POST['id_actividad']);
    $titulo = $_POST['titulo'] ?? '';
    $descripcion = $_POST['descripcion'] ?? '';
    $fecha_entrega = $_POST['fecha_entrega'] ?? null;

    $sql = "UPDATE actividades SET titulo='" . mysqli_real_escape_string($conexion, $titulo) . "', descripcion='" . mysqli_real_escape_string($conexion, $descripcion) . "', fecha_entrega='$fecha_entrega' WHERE id_actividad=$id";
    mysqli_query($conexion, $sql);
    header('Location: ../views/actividades/listar.php');
    exit;
}

if (isset($_POST['eliminar'])) {
    $id = intval($_POST['id_actividad']);
    $sql = "DELETE FROM actividades WHERE id_actividad=$id";
    mysqli_query($conexion, $sql);
    header('Location: ../views/actividades/listar.php');
    exit;
}

header('Location: ../views/actividades/listar.php');
exit;
