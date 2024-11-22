<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Viajando na Maionese</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
  <!-- <style>
    .card {
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover {
      transform: scale(1.05);
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
      z-index: 1000;
    }

    footer {
      background-color: #f8f9fa;
      padding: 20px 0;
      text-align: center;
    }
  </style> -->
</head>
<body>
  <?php include_once "nav.php"; ?>

  <div class="container my-5">
    <h1 class="text-center mb-4">Viajando na Maionese</h1>
    <div class="row g-4">
      <!-- Card 1 -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="card h-100">
          <img src="img/veneza.jpeg" class="card-img-top" alt="Veneza">
          <div class="card-body">
            <h5 class="card-title">Veneza</h5>
            <p class="card-text">Explore os encantos de Veneza. Uma cidade única construída sobre a água.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary btn-sm">Saiba Mais</a>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="card h-100">
          <img src="img/florenca.jpg" class="card-img-top" alt="Florença">
          <div class="card-body">
            <h5 class="card-title">Florença</h5>
            <p class="card-text">Conheça a capital da Toscana, berço do Renascimento e cheia de arte.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary btn-sm">Saiba Mais</a>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="card h-100">
          <img src="img/roma.jpg" class="card-img-top" alt="Roma">
          <div class="card-body">
            <h5 class="card-title">Roma</h5>
            <p class="card-text">Descubra a cidade eterna, repleta de história e arquitetura impressionante.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary btn-sm">Saiba Mais</a>
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="card h-100">
          <img src="img/florencax.jpg" class="card-img-top" alt="Florença Extra">
          <div class="card-body">
            <h5 class="card-title">Florença Extra</h5>
            <p class="card-text">Outro lado encantador de Florença esperando por você.</p>
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
      <p class="mb-0">&copy; 2024 Viajando na Maionese. Todos os direitos reservados.</p>
      <a href="#" class="text-decoration-none">Mais Links</a>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
