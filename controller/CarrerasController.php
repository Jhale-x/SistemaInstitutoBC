<?php

include_once __DIR__ . "/../config/conexion.php";

/* REGISTRAR CARRERA */

if(isset($_POST['registrar'])){

    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $duracion = $_POST['duracion'];
    $estado = $_POST['estado'];

    $sql = "INSERT INTO carreras(

                nombre,
                descripcion,
                duracion,
                estado

            )

            VALUES(

                '$nombre',
                '$descripcion',
                '$duracion',
                '$estado'

            )";

    mysqli_query($conexion, $sql);

    header("Location: ../views/carreras/listar.php");

}
?>