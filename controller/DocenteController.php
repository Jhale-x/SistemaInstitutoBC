<?php

include_once __DIR__ . "/../config/conexion.php";

/* REGISTRAR DOCENTE */

if (isset($_POST['registrar'])) {

    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $dni = $_POST['dni'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $especialidad = $_POST['especialidad'];
    $estado = $_POST['estado'];

    $sql = "INSERT INTO docentes(

                nombres,
                apellidos,
                dni,
                correo,
                telefono,
                especialidad,
                estado

            )

            VALUES(

                '$nombres',
                '$apellidos',
                '$dni',
                '$correo',
                '$telefono',
                '$especialidad',
                '$estado'

            )";

    mysqli_query($conexion, $sql);

    header("Location: ../views/docentes/listar.php");
}
