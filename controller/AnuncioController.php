<?php

include_once __DIR__ . "/../config/conexion.php";

/* REGISTRAR ANUNCIO */

if (isset($_POST['registrar'])) {

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

if (isset($_POST['editar'])) {

    $id = intval($_POST['id_anuncio']);
    $titulo = mysqli_real_escape_string($conexion, $_POST['titulo']);
    $descripcion = mysqli_real_escape_string($conexion, $_POST['descripcion']);
    $docente = mysqli_real_escape_string($conexion, $_POST['docente']);
    $fecha = mysqli_real_escape_string($conexion, $_POST['fecha']);
    $estado = mysqli_real_escape_string($conexion, $_POST['estado']);

    $update = "UPDATE anuncios SET titulo='$titulo', descripcion='$descripcion', docente='$docente', fecha='$fecha', estado='$estado' WHERE id_anuncio=$id";
    mysqli_query($conexion, $update);

    header("Location: ../views/anuncios/listar.php");
    exit;
}

if (isset($_POST['eliminar'])) {
    $id = intval($_POST['id_anuncio']);
    $sql = "DELETE FROM anuncios WHERE id_anuncio=$id";
    mysqli_query($conexion, $sql);
    header("Location: ../views/anuncios/listar.php");
    exit;
}
