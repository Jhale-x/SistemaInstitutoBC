<?php

include_once __DIR__ . "/../../config/conexion.php";

$id = $_GET['id'];

$sql = "DELETE FROM calendario WHERE id_evento = '$id'";
mysqli_query($conexion, $sql);

header('Location: listar.php');
exit;
