<?php

session_start();

if (!isset($_SESSION['id_usuario'])) {

    header("Location: ../login.php");

    exit;
}

include_once __DIR__ . "/../../config/conexion.php";

$sql = "SELECT * FROM anuncios";

$resultado = mysqli_query($conexion, $sql);

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Anuncios</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link rel="stylesheet"
        href="../../assets/css/anuncios.css">

</head>

<body>

    <div class="container py-5">

        <div class="topbar">

            <h1>
                Gestión de Anuncios
            </h1>

            <a href="registrar.php"
                class="btn btn-primary">

                Nuevo Anuncio

            </a>

        </div>

        <div class="table-container">

            <table class="table custom-table">

                <thead>

                    <tr>

                        <th>ID</th>
                        <th>Título</th>
                        <th>Docente</th>
                        <th>Fecha</th>
                        <th>Estado</th>
                        <th>Acciones</th>

                    </tr>

                </thead>

                <tbody>

                    <?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>

                        <tr>

                            <td>
                                <?php echo $fila['id_anuncio']; ?>
                            </td>

                            <td>
                                <?php echo $fila['titulo']; ?>
                            </td>

                            <td>
                                <?php echo $fila['docente']; ?>
                            </td>

                            <td>
                                <?php echo $fila['fecha']; ?>
                            </td>

                            <td>
                                <?php echo $fila['estado']; ?>
                            </td>

                            <td>

                                <a href="detalle.php?id=<?php echo $fila['id_anuncio']; ?>"
                                    class="btn btn-info btn-sm">

                                    Ver

                                </a>

                                <a href="editar.php?id=<?php echo $fila['id_anuncio']; ?>"
                                    class="btn btn-warning btn-sm">

                                    Editar

                                </a>

                                <a href="eliminar.php?id=<?php echo $fila['id_anuncio']; ?>"
                                    class="btn btn-danger btn-sm">

                                    Eliminar

                                </a>

                            </td>

                        </tr>

                    <?php } ?>

                </tbody>

            </table>

        </div>

    </div>

</body>

</html>