<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Login | Instituto BC 2026</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link rel="stylesheet"
        href="../assets/css/login.css">

</head>

<body>

    <!-- BOTON VOLVER -->

    <a href="home.php" class="back-btn">
        ← Volver al Inicio
    </a>

    <!-- LOGIN -->

    <section class="login-section">

        <div class="login-container">

            <!-- PANEL IZQUIERDO -->

            <div class="login-left">

                <div class="overlay"></div>

                <div class="left-content">

                    <h1>
                        Instituto BC 2026
                    </h1>

                    <p>
                        Plataforma académica moderna para la gestión educativa institucional.
                    </p>

                </div>

            </div>

            <!-- PANEL DERECHO -->

            <div class="login-right">

                <div class="login-box">

                    <h2>
                        Iniciar Sesión
                    </h2>

                    <p class="subtitle">
                        Accede con tu correo institucional
                    </p>

                    <form action="../controller/LoginController.php"
                        method="POST">

                        <div class="mb-4">

                            <label class="form-label">
                                Correo Institucional
                            </label>

                            <input type="email"
                                name="correo"
                                class="form-control custom-input"
                                placeholder="ejemplo@bc2026.com"
                                required>

                        </div>

                        <div class="mb-4">

                            <label class="form-label">
                                Contraseña
                            </label>

                            <input type="password"
                                name="password"
                                class="form-control custom-input"
                                placeholder="Ingrese su contraseña"
                                required>

                        </div>

                        <button type="submit"
                            class="btn-login">

                            Ingresar

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </section>

    <script src="../assets/js/login.js"></script>

</body>

</html>