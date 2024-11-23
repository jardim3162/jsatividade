<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD JS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>

<?php include "nav.php"; ?>

<body>

    <div class="container mt-5">
        <h3 class="text-center">Gerenciador de Músicas</h3>

        <div class="form-container mt-4">
            <form onsubmit="return salvarMusica(event);">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="id_titulo" class="form-label">ID</label>
                        <input id="id_titulo" type="number" name="id_titulo" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="titulo" class="form-label">Título</label>
                        <input id="titulo" type="text" name="titulo" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label for="artista" class="form-label">Artista</label>
                        <input id="artista" type="text" name="artista" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label for="genero" class="form-label">Gênero</label>
                        <input id="genero" type="text" name="genero" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label for="ano" class="form-label">Ano</label>
                        <input id="ano" type="number" name="ano" class="form-control" required>
                    </div>
                    <div class="col-12 text-center mt-4">
                        <button class="btn btn-primary btn-lg" type="submit">Salvar Música</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>