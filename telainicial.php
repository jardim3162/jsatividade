<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Inicial</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h3 class="text-center">Lista de Músicas</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered text-center">
                    <thead class="table-primary">
                        <tr>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Artista</th>
                            <th>Gênero</th>
                            <th>Ano</th>
                            <th colspan="2">Ações</th>
                        </tr>
                    </thead>
                    <tbody id="musicas">
                
                    </tbody>
                </table>
            </div>
        </div>
    </div><br>
    
    <div class="form-container"
    style="width: 100%;  ">
            <form class="row" onsubmit="return salvarMusica(event);">
                <div class="input-field col s12 m6">
                    <input id="id_titulo" type="number" name="id_titulo">
                    <label for="id_titulo">ID</label>
                </div>
                <div class="input-field col s12 m6">
                    <input id="titulo" type="text" name="titulo" required>
                    <label for="titulo">Título</label>
                </div>
                <div class="input-field col s12 m6">
                    <input id="artista" type="text" name="artista" required>
                    <label for="artista">Artista</label>
                </div>
                <div class="input-field col s12 m6">
                    <input id="genero" type="text" name="genero" required>
                    <label for="genero">Gênero</label>
                </div>
                <div class="input-field col s12 m6">
                    <input id="ano" type="number" name="ano" required>
                    <label for="ano">Ano</label>
                </div>
                <div class="col s12 center-align">
                    <button class="btn waves-effect waves-light" type="submit">Salvar Música</button>
                </div>
            </form>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
