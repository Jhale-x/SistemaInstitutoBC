<?php

include_once __DIR__ . "/../config/conexion.php";

/* REGISTRAR SALON */

if (isset($_POST['registrar'])) {

    $nombre = $_POST['nombre'];
    $capacidad = $_POST['capacidad'];
    $ubicacion = $_POST['ubicacion'];
    $carrera = $_POST['carrera'];
    $estado = $_POST['estado'];

    $sql = "INSERT INTO salones(

                nombre,
                capacidad,
                ubicacion,
                carrera,
                estado

            )

            VALUES(

                '$nombre',
                '$capacidad',
                '$ubicacion',
                '$carrera',
                '$estado'

            )";

    mysqli_query($conexion, $sql);

    header("Location: ../views/salones/listar.php");
}
