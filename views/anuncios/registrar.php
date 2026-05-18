<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Registrar Anuncio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

</head>

<body style="background:#0f172a; color:white;">

    <div class="container py-5">

        <h1 class="mb-4">
            Registrar Anuncio
        </h1>

        <form action="../../controller/AnuncioController.php"
            method="POST">

            <div class="mb-3">

                <label>Título</label>

                <input type="text"
                    name="titulo"
                    class="form-control">

            </div>

            <div class="mb-3">

                <label>Descripción</label>

                <textarea name="descripcion"
                    class="form-control"
                    rows="5"></textarea>

            </div>

            <div class="mb-3">

                <label>Docente</label>

                <input type="text"
                    name="docente"
                    class="form-control">

            </div>

            <div class="mb-3">

                <label>Fecha</label>

                <input type="date"
                    name="fecha"
                    class="form-control">

            </div>

            <div class="mb-3">

                <label>Estado</label>

                <select name="estado"
                    class="form-control">

                    <option value="Publicado">
                        Publicado
                    </option>

                    <option value="Borrador">
                        Borrador
                    </option>

                </select>

            </div>

            <button type="submit"
                name="registrar"
                class="btn btn-primary">

                Registrar Anuncio

            </button>

        </form>

    </div>

</body>

</html>