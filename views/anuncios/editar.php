<?php

include_once __DIR__ . "/../../config/conexion.php";

$id = $_GET['id'];

$sql = "SELECT * FROM anuncios 
        WHERE id_anuncio = '$id'";

$resultado = mysqli_query($conexion, $sql);

$fila = mysqli_fetch_assoc($resultado);

if (isset($_POST['actualizar'])) {

    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $docente = $_POST['docente'];
    $fecha = $_POST['fecha'];
    $estado = $_POST['estado'];

    $update = "UPDATE anuncios SET

                titulo = '$titulo',
                descripcion = '$descripcion',
                docente = '$docente',
                fecha = '$fecha',
                estado = '$estado'

                WHERE id_anuncio = '$id'";

    mysqli_query($conexion, $update);

    header("Location: listar.php");
}

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Editar Anuncio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

</head>

<body style="background:#0f172a; color:white;">

    <div class="container py-5">

        <h1 class="mb-4">
            Editar Anuncio
        </h1>

        <form method="POST">

            <input type="text"
                name="titulo"
                value="<?php echo $fila['titulo']; ?>"
                class="form-control mb-3">

            <textarea name="descripcion"
                class="form-control mb-3"><?php echo $fila['descripcion']; ?></textarea>

            <input type="text"
                name="docente"
                value="<?php echo $fila['docente']; ?>"
                class="form-control mb-3">

            <input type="date"
                name="fecha"
                value="<?php echo $fila['fecha']; ?>"
                class="form-control mb-3">

            <select name="estado"
                class="form-control mb-3">

                <option value="Publicado">
                    Publicado
                </option>

                <option value="Borrador">
                    Borrador
                </option>

            </select>

            <button type="submit"
                name="actualizar"
                class="btn btn-warning">

                Actualizar

            </button>

        </form>

    </div>

</body>

</html>