<?php

include_once __DIR__ . "/../../config/conexion.php";

$id = $_GET['id'];

$sql = "DELETE FROM matriculas 
        WHERE id_matricula = '$id'";

mysqli_query($conexion, $sql);

header("Location: listar.php");
