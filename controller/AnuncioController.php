<?php

include_once __DIR__ . "/../config/conexion.php";

/* REGISTRAR ANUNCIO */

if(isset($_POST['registrar'])){

    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $docente = $_POST['docente'];
    $fecha = $_POST['fecha'];
    $estado = $_POST['estado'];

    $sql = "INSERT INTO anuncios(

                titulo,
                descripcion,
                docente,
                fecha,
                estado

            )

            VALUES(

                '$titulo',
                '$descripcion',
                '$docente',
                '$fecha',
                '$estado'

            )";

    mysqli_query($conexion, $sql);

    header("Location: ../views/anuncios/listar.php");

}
?>