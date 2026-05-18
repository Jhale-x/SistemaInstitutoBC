<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Nuevo Mensaje</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

</head>

<body style="background:#0f172a; color:white;">

    <div class="container py-5">

        <h1 class="mb-4">
            Enviar Mensaje
        </h1>

        <form action="../../controller/MensajeController.php"
            method="POST">

            <div class="mb-3">

                <label>Emisor</label>

                <input type="text"
                    name="emisor"
                    value="<?php echo $_SESSION['nombre']; ?>"
                    class="form-control"
                    readonly>

            </div>

            <div class="mb-3">

                <label>Receptor</label>

                <input type="text"
                    name="receptor"
                    class="form-control">

            </div>

            <div class="mb-3">

                <label>Asunto</label>

                <input type="text"
                    name="asunto"
                    class="form-control">

            </div>

            <div class="mb-3">

                <label>Mensaje</label>

                <textarea name="mensaje"
                    class="form-control"
                    rows="6"></textarea>

            </div>

            <button type="submit"
                name="enviar"
                class="btn btn-primary">

                Enviar Mensaje

            </button>

        </form>

    </div>

</body>

</html>