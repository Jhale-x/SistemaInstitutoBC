<?php
include_once __DIR__ . "/../config/conexion.php";

if (isset($_POST['registrar'])) {
    $nombre = $_POST['nombre'] ?? '';
    $sql = "INSERT INTO carreras (nombre) VALUES ('" . mysqli_real_escape_string($conexion, $nombre) . "')";
    mysqli_query($conexion, $sql);
    header('Location: ../views/carreras/listar.php');
    exit;
}

if (isset($_POST['editar'])) {
    $id = intval($_POST['id_carrera']);
    $nombre = $_POST['nombre'] ?? '';
    $sql = "UPDATE carreras SET nombre='" . mysqli_real_escape_string($conexion, $nombre) . "' WHERE id_carrera=$id";
    mysqli_query($conexion, $sql);
    header('Location: ../views/carreras/listar.php');
    exit;
}

if (isset($_POST['eliminar'])) {
    $id = intval($_POST['id_carrera']);
    $sql = "DELETE FROM carreras WHERE id_carrera=$id";
    mysqli_query($conexion, $sql);
    header('Location: ../views/carreras/listar.php');
    exit;
}

header('Location: ../views/carreras/listar.php');
exit;
