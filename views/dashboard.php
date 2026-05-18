<?php

session_start();

if (!isset($_SESSION['id_usuario'])) {

    header("Location: login.php");

    exit;
}

/* CONEXION */

include_once __DIR__ . "/../config/conexion.php";

/* CONTADORES DINAMICOS */

$usuarios = mysqli_fetch_assoc(
    mysqli_query($conexion, "SELECT COUNT(*) AS total FROM usuarios")
);

$cursos = mysqli_fetch_assoc(
    mysqli_query($conexion, "SELECT COUNT(*) AS total FROM cursos")
);

$docentes = mysqli_fetch_assoc(
    mysqli_query($conexion, "SELECT COUNT(*) AS total FROM docentes")
);

$alumnos = mysqli_fetch_assoc(
    mysqli_query($conexion, "SELECT COUNT(*) AS total FROM alumnos")
);

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Dashboard | Instituto BC 2026</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link rel="stylesheet"
        href="../assets/css/dashboard.css">

</head>

<body>

    <!-- SIDEBAR -->

    <aside class="sidebar">

        <div>

            <h2 class="logo">
                BC 2026
            </h2>

            <ul class="menu">

                <li class="active">
                    <a href="../views/dashboard.php">
                        📊 Dashboard
                    </a>
                </li>

                <li>
                    <a href="../views/usuarios/listar.php">
                        👨‍🎓 Usuarios
                    </a>
                </li>

                <li>
                    <a href="../views/alumnos/listar.php">
                        🧑‍🎓 Alumnos
                    </a>
                </li>

                <li>
                    <a href="../views/docentes/listar.php">
                        👨‍🏫 Docentes
                    </a>
                </li>

                <li>
                    <a href="../views/cursos/listar.php">
                        📚 Cursos
                    </a>
                </li>

                <li>
                    <a href="../views/carreras/listar.php">
                        🎯 Carreras
                    </a>
                </li>

                <li>
                    <a href="../views/salones/listar.php">
                        🏫 Salones
                    </a>
                </li>

                <li>
                    <a href="../views/horarios/listar.php">
                        📅 Horarios
                    </a>
                </li>

                <li>
                    <a href="../views/matriculas/listar.php">
                        📝 Matrículas
                    </a>
                </li>

                <li>
                    <a href="../views/asistencia/listar.php">
                        ✅ Asistencia
                    </a>
                </li>

                <li>
                    <a href="../views/notas/listar.php">
                        📖 Notas
                    </a>
                </li>

                <li>
                    <a href="../views/actividades/listar.php">
                        📂 Actividades
                    </a>
                </li>

                <li>
                    <a href="../views/anuncios/listar.php">
                        📢 Anuncios
                    </a>
                </li>

                <li>
                    <a href="../views/mensajes/listar.php">
                        💬 Mensajes
                    </a>
                </li>

                <li>
                    <a href="../views/calendario/listar.php">
                        🗓️ Calendario
                    </a>
                </li>

                <li>
                    <a href="../views/reportes/listar.php">
                        📈 Reportes
                    </a>
                </li>

            </ul>

        </div>

        <a href="../controller/LogoutController.php"
            class="logout-btn">

            Cerrar Sesión

        </a>

    </aside>

    <!-- MAIN -->

    <main class="main-content">

        <!-- TOPBAR -->

        <div class="topbar">

            <div>

                <h1>
                    Bienvenido,
                    <?php echo $_SESSION['nombre']; ?>
                </h1>

                <p>
                    Sistema Académico Instituto BC 2026
                </p>

            </div>

            <div class="profile">

                👤

            </div>

        </div>

        <!-- CARDS -->

        <div class="cards">

            <div class="dashboard-card">

                <h3>Usuarios</h3>

                <span>
                    <?php echo $usuarios['total']; ?>
                </span>

            </div>

            <div class="dashboard-card">

                <h3>Cursos</h3>

                <span>
                    <?php echo $cursos['total']; ?>
                </span>

            </div>

            <div class="dashboard-card">

                <h3>Docentes</h3>

                <span>
                    <?php echo $docentes['total']; ?>
                </span>

            </div>

            <div class="dashboard-card">

                <h3>Alumnos</h3>

                <span>
                    <?php echo $alumnos['total']; ?>
                </span>

            </div>

        </div>

        <!-- TABLA -->

        <div class="table-container">

            <div class="table-header">

                <h3>
                    Información General
                </h3>

            </div>

            <table class="table custom-table">

                <thead>

                    <tr>

                        <th>Módulo</th>
                        <th>Estado</th>
                        <th>Acceso</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>Usuarios</td>

                        <td>
                            <span class="status active-status">
                                Disponible
                            </span>
                        </td>

                        <td>
                            <a href="../views/usuarios/listar.php"
                                class="btn btn-primary btn-sm">

                                Ingresar

                            </a>
                        </td>

                    </tr>

                    <tr>

                        <td>Cursos</td>

                        <td>
                            <span class="status active-status">
                                Disponible
                            </span>
                        </td>

                        <td>
                            <a href="../views/cursos/listar.php"
                                class="btn btn-primary btn-sm">

                                Ingresar

                            </a>
                        </td>

                    </tr>

                    <tr>

                        <td>Notas</td>

                        <td>
                            <span class="status active-status">
                                Disponible
                            </span>
                        </td>

                        <td>
                            <a href="../views/notas/listar.php"
                                class="btn btn-primary btn-sm">

                                Ingresar

                            </a>
                        </td>

                    </tr>

                    <tr>

                        <td>Reportes</td>

                        <td>
                            <span class="status inactive-status">
                                En proceso
                            </span>
                        </td>

                        <td>
                            <a href="../views/reportes/listar.php"
                                class="btn btn-warning btn-sm">

                                Ver

                            </a>
                        </td>

                    </tr>

                </tbody>

            </table>

        </div>

    </main>

    <script src="../assets/js/dashboard.js"></script>

</body>

</html>