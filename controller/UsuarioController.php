<?php

include_once __DIR__ . "/../config/conexion.php";


$sql = "SELECT * FROM usuarios";

$resultado = mysqli_query($conexion, $sql);

if (isset($_POST['registrar'])) {

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    $sql = "INSERT INTO usuarios(
                nombre,
                correo,
                password
            )

            VALUES(
                '$nombre',
                '$correo',
                '$password'
            )";

    mysqli_query($conexion, $sql);

    header("Location: ../views/usuarios/listar.php");
    exit;
}

if (isset($_POST['editar'])) {
    $id = intval($_POST['id_usuario']);
    $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
    $correo = mysqli_real_escape_string($conexion, $_POST['correo']);
    $password = mysqli_real_escape_string($conexion, $_POST['password']);

    $update = "UPDATE usuarios SET nombre='$nombre', correo='$correo', password='$password' WHERE id_usuario=$id";
    mysqli_query($conexion, $update);

    header("Location: ../views/usuarios/listar.php");
    exit;
}

if (isset($_POST['eliminar'])) {
    $id = intval($_POST['id_usuario']);
    $sql = "DELETE FROM usuarios WHERE id_usuario=$id";
    mysqli_query($conexion, $sql);

    header("Location: ../views/usuarios/listar.php");
    exit;
}
