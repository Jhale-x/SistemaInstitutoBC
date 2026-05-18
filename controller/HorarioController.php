<?php

include_once __DIR__ . "/../config/conexion.php";

/* REGISTRAR HORARIO */

if (isset($_POST['registrar'])) {

    $curso = $_POST['curso'];
    $docente = $_POST['docente'];
    $salon = $_POST['salon'];
    $dia = $_POST['dia'];
    $hora_inicio = $_POST['hora_inicio'];
    $hora_fin = $_POST['hora_fin'];
    $estado = $_POST['estado'];

    $sql = "INSERT INTO horarios(

                curso,
                docente,
                salon,
                dia,
                hora_inicio,
                hora_fin,
                estado

            )

            VALUES(

                '$curso',
                '$docente',
                '$salon',
                '$dia',
                '$hora_inicio',
                '$hora_fin',
                '$estado'

            )";

    mysqli_query($conexion, $sql);

    header("Location: ../views/horarios/listar.php");
}
