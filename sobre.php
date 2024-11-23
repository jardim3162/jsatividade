<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Musicas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">🎵 Musicas</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Inicio</a>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="bg-dark text-white text-center py-5">
        <div class="container">
            <h1 class="display-4">Sinta o Ritmo</h1>
            <p class="lead">Explore mais o mundo da musica.</p>
            <a href="home.php" class="btn btn-primary btn-lg">Descubra</a>
        </div>
    </header>

    <section id="about" class="py-5">
        <div class="container text-center">
            <h2 class="mb-4">Sobre as Musicas</h2>
            <p>A música é uma linguagem universal que conecta as pessoas. No Music Vibes, celebramos a diversidade do som, do clássico ao hip-hop, do jazz ao rock e tudo mais.</p>
        </div>
    </section>

    <section id="genres" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Genêros Populares</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Rock</h5>
                            <p class="card-text">Sinta a energia dos clássicos e sucessos do rock moderno.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Jazz</h5>
                            <p class="card-text">Sons suaves e emocionantes para relaxar o seu dia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Pop</h5>
                            <p class="card-text">Músicas cativantes e sucessos no topo das paradas para todos os gostos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-5">
        <div class="container text-center">
            <h2 class="mb-4">Entre em contato</h2>
            <p>Gostamos de ouvir o que você tem a dizer! Entre em contato conosco para sugestões, colaborações ou apenas para compartilhar sua música favorita.</p>
            <a href="#" class="btn btn-outline-primary">Nós contate</a>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-3">
        <p class="mb-0">&copy; 2024 Musica. Todos Direitos Reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
