<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Globe-trotteur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" async>
  </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid ">
              <a class="navbar-brand mx-auto" href="#">Globe-trotteur</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Homme</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Femme</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Enfant</a>
                  </li>
                </ul>
                <div class="navbar-nav ms-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="#">Compte</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Panier</a>
                    </li>
                  </div>
                </div>
              </div>
          </nav>
    </header>






<main>
    <?= $content ?>
</main>


<footer class="bg-light text-black p-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <h4>Contact</h4>
                <p>Adresse : 123 Rue des Chaussures</p>
                <p>Téléphone : (123) 456-7890</p>
            </div>
            <div class="col-md-4">
                <h4>Liens Rapides</h4>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-black">Accueil</a></li>
                    <li><a href="#" class="text-black">Produits</a></li>
                    <li><a href="#" class="text-black">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4>Suivez-Nous</h4>
                <a href="#" class="text-black"><i class="fab fa-facebook"></i> Facebook</a><br>
                <a href="#" class="text-black"><i class="fab fa-twitter"></i> Twitter</a><br>
                <a href="#" class="text-black"><i class="fab fa-instagram"></i> Instagram</a><br>
            </div>
        </div>
    </div>
</footer>



<script src="https://kit.fontawesome.com/a076d05399.js" async></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous" async></script>
</body>
</html>