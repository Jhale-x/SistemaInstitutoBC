<?php

include_once __DIR__ . "/../../config/conexion.php";

$id = intval($_GET['id']);
$sql = "SELECT * FROM usuarios WHERE id_usuario = '$id'";
$resultado = mysqli_query($conexion, $sql);
$fila = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/usuarios.css">
</head>

<body>
    <div class="container py-5">
        <h1 class="mb-4">Editar Usuario</h1>

        <form action="../../controller/UsuarioController.php" method="POST">
            <input type="hidden" name="id_usuario" value="<?php echo $fila['id_usuario']; ?>">

            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" name="nombre" value="<?php echo $fila['nombre']; ?>" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Correo</label>
                <input type="email" name="correo" value="<?php echo $fila['correo']; ?>" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Contraseña</label>
                <input type="password" name="password" class="form-control" placeholder="Nueva contraseña o actual" required>
            </div>

            <button type="submit" name="editar" class="btn btn-warning">Actualizar</button>
        </form>
    </div>
</body>

</html>
