<?php

session_start();

if (!isset($_SESSION['id_usuario'])) {
    header("Location: ../login.php");
    exit;
}

include_once __DIR__ . "/../../config/conexion.php";

if (!isset($_GET['id'])) {
    header("Location: listar.php");
    exit;
}

$id = intval($_GET['id']);
$sql = "SELECT * FROM alumnos WHERE id_alumno = $id";
$resultado = mysqli_query($conexion, $sql);
$fila = mysqli_fetch_assoc($resultado);

if (!$fila) {
    header("Location: listar.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Editar Alumno</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

</head>

<body style="background:#0f172a; color:white;">

    <div class="container py-5">

        <h1 class="mb-4">
            Editar Alumno
        </h1>

        <form action="../../controller/AlumnoController.php"
            method="POST">

            <input type="hidden" name="id_alumno" value="<?php echo $fila['id_alumno']; ?>">

            <div class="row">

                <div class="col-md-6 mb-3">

                    <label>Nombres</label>

                    <input type="text"
                        name="nombres"
                        class="form-control"
                        value="<?php echo htmlspecialchars($fila['nombres']); ?>"
                        required>

                </div>

                <div class="col-md-6 mb-3">

                    <label>Apellidos</label>

                    <input type="text"
                        name="apellidos"
                        class="form-control"
                        value="<?php echo htmlspecialchars($fila['apellidos']); ?>"
                        required>

                </div>

                <div class="col-md-6 mb-3">

                    <label>DNI</label>

                    <input type="text"
                        name="dni"
                        class="form-control"
                        value="<?php echo htmlspecialchars($fila['dni']); ?>"
                        required>

                </div>

                <div class="col-md-6 mb-3">

                    <label>Correo</label>

                    <input type="email"
                        name="correo"
                        class="form-control"
                        value="<?php echo htmlspecialchars($fila['correo']); ?>"
                        required>

                </div>

                <div class="col-md-6 mb-3">

                    <label>Teléfono</label>

                    <input type="text"
                        name="telefono"
                        class="form-control"
                        value="<?php echo htmlspecialchars($fila['telefono']); ?>">

                </div>

                <div class="col-md-6 mb-3">

                    <label>Carrera</label>

                    <input type="text"
                        name="carrera"
                        class="form-control"
                        value="<?php echo htmlspecialchars($fila['carrera']); ?>">

                </div>

                <div class="col-md-6 mb-3">

                    <label>Ciclo</label>

                    <input type="text"
                        name="ciclo"
                        class="form-control"
                        value="<?php echo htmlspecialchars($fila['ciclo']); ?>">

                </div>

                <div class="col-md-6 mb-3">

                    <label>Estado</label>

                    <select name="estado"
                        class="form-control">

                        <option value="Activo" <?php echo $fila['estado'] === 'Activo' ? 'selected' : ''; ?>>
                            Activo
                        </option>

                        <option value="Inactivo" <?php echo $fila['estado'] === 'Inactivo' ? 'selected' : ''; ?>>
                            Inactivo
                        </option>

                    </select>

                </div>

            </div>

            <button type="submit"
                name="editar"
                class="btn btn-warning">

                Guardar cambios

            </button>

            <a href="listar.php" class="btn btn-secondary ms-2">Cancelar</a>

        </form>

    </div>

</body>

</html>