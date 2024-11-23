<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Musicas</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <?php include_once "nav.php"; ?>

  <div class="container my-5">
    <h1 class="text-center mb-4">Top Musicas do Momento</h1><br>
    <div class="row g-4">

      <div class="col-12 col-sm-6 col-lg-3">
        <div class="card h-100">
          <img src="img/alcione.jpg" class="card-img-top" alt="alcione">
          <div class="card-body">
            <h5 class="card-title">Alcione</h5>
            <p class="card-text">Você me vira a cabeça.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary btn-sm">Saiba Mais</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-3">
        <div class="card h-100">
          <img src="img/michael.jpg" class="card-img-top" alt="Florença">
          <div class="card-body">
            <h5 class="card-title">Michael Jackson</h5>
            <p class="card-text">Heaven Can Wait
              
            </p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary btn-sm">Saiba Mais</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-3">
        <div class="card h-100">
          <img src="img/slipknot.jpg" class="card-img-top" alt="Roma">
          <div class="card-body">
            <h5 class="card-title">Slipknot</h5>
            <p class="card-text">Spit it Out</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary btn-sm">Saiba Mais</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-3">
        <div class="card h-100">
          <img src="img/jorge.jpg" class="card-img-top" alt="Florença Extra">
          <div class="card-body">
            <h5 class="card-title">Seu Jorge</h5>
            <p class="card-text">Mina do Condomínio</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary btn-sm">Saiba Mais</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <a href="index.php" class="btn btn-primary btn-sm" style="padding: 15px;"   >Adicionar Musicas</a><br>
      <br><p class="mb-0">&copy; 2024 Musicas. Todos os direitos reservados.</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>