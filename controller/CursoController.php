<?php

include_once __DIR__ . "/../config/conexion.php";

/* REGISTRAR CURSO */

if(isset($_POST['registrar'])){

    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $creditos = $_POST['creditos'];
    $ciclo = $_POST['ciclo'];
    $docente = $_POST['docente'];
    $carrera = $_POST['carrera'];
    $estado = $_POST['estado'];

    $sql = "INSERT INTO cursos(

                nombre,
                descripcion,
                creditos,
                ciclo,
                docente,
                carrera,
                estado

            )

            VALUES(

                '$nombre',
                '$descripcion',
                '$creditos',
                '$ciclo',
                '$docente',
                '$carrera',
                '$estado'

            )";

    mysqli_query($conexion, $sql);

    header("Location: ../views/cursos/listar.php");

}
?>