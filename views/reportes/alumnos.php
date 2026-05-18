<?php

include_once __DIR__ . "/../../config/conexion.php";

$sql = "SELECT * FROM usuarios";

$resultado = mysqli_query($conexion, $sql);

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Reporte Alumnos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

</head>

<body style="background:#0f172a; color:white;">

    <div class="container py-5">

        <h1 class="mb-4">
            Reporte de Usuarios
        </h1>

        <table class="table table-dark table-bordered">

            <thead>

                <tr>

                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Rol</th>

                </tr>

            </thead>

            <tbody>

                <?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>

                    <tr>

                        <td>
                            <?php echo $fila['id_usuario']; ?>
                        </td>

                        <td>
                            <?php echo $fila['nombre']; ?>
                        </td>

                        <td>
                            <?php echo $fila['correo']; ?>
                        </td>

                        <td>
                            <?php echo $fila['rol']; ?>
                        </td>

                    </tr>

                <?php } ?>

            </tbody>

        </table>

    </div>

</body>

</html>