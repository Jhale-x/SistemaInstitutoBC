<?php

include_once __DIR__ . "/../config/conexion.php";


$sql = "SELECT * FROM usuarios";

$resultado = mysqli_query($conexion, $sql);

if(isset($_POST['registrar'])){

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

}