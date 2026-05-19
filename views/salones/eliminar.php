<?php

include_once __DIR__ . "/../../config/conexion.php";

$id = intval($_GET['id']);
$sql = "DELETE FROM salones WHERE id_salon = '$id'";
mysqli_query($conexion, $sql);

header('Location: listar.php');
exit;
