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
