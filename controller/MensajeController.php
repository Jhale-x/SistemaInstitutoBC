<?php

include_once __DIR__ . "/../config/conexion.php";

/* REGISTRAR MENSAJE */

if (isset($_POST['enviar'])) {

    $emisor = $_POST['emisor'];
    $receptor = $_POST['receptor'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    $fecha = date("Y-m-d H:i:s");

    $estado = "Enviado";

    $sql = "INSERT INTO mensajes(

                emisor,
                receptor,
                asunto,
                mensaje,
                fecha,
                estado

            )

            VALUES(

                '$emisor',
                '$receptor',
                '$asunto',
                '$mensaje',
                '$fecha',
                '$estado'

            )";

    mysqli_query($conexion, $sql);

    header("Location: ../views/mensajes/listar.php");
}

if (isset($_POST['editar'])) {

    $id = intval($_POST['id_mensaje']);
    $emisor = mysqli_real_escape_string($conexion, $_POST['emisor']);
    $receptor = mysqli_real_escape_string($conexion, $_POST['receptor']);
    $asunto = mysqli_real_escape_string($conexion, $_POST['asunto']);
    $mensaje = mysqli_real_escape_string($conexion, $_POST['mensaje']);
    $estado = mysqli_real_escape_string($conexion, $_POST['estado'] ?? 'Enviado');

    $update = "UPDATE mensajes SET emisor='$emisor', receptor='$receptor', asunto='$asunto', mensaje='$mensaje', estado='$estado' WHERE id_mensaje=$id";
    mysqli_query($conexion, $update);

    header("Location: ../views/mensajes/listar.php");
    exit;
}

if (isset($_POST['eliminar'])) {
    $id = intval($_POST['id_mensaje']);
    $sql = "DELETE FROM mensajes WHERE id_mensaje=$id";
    mysqli_query($conexion, $sql);
    header("Location: ../views/mensajes/listar.php");
    exit;
}
