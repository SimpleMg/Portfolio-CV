<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CDN BOOSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Portfolio</title>
</head>
<body>
    <!-- php dossier -->
    <?php
      $dossier = __DIR__;
    ?>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Portfolio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">acceuil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#cv_ref">cv</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#projets_ref">projets</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#jeux_ref">jeux</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact_ref">contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- FIN NAVBAR -->
    <!-- Acceuil -->
    <p id="acceuil_ref">acceuil</p>
    <!-- CV -->
    <p id="cv_ref">CV</p>
    <?php 
        $fichier = '/cv.php';
        if (file_exists($dossier . $fichier)) {
            require_once($dossier . $fichier);
        } else {
            echo "Le fichier $fichier n'a pas été trouvé pas";
        }
    ?>
    <!-- projets -->
    <p id="projets_ref">projets</p>
    <?php 
        $fichier = '/projets.php';
        if (file_exists($dossier . $fichier)) {
            require_once($dossier . $fichier);
        } else {
            echo "Le fichier $fichier n'a pas été trouvé pas";
        }
    ?>
    <!-- jeux -->
    <p id="jeux_ref">jeux</p>
    <?php 
        $fichier = '/jeux.php';
        if (file_exists($dossier . $fichier)) {
            require_once($dossier . $fichier);
        } else {
            echo "Le fichier $fichier n'a pas été trouvé pas";
        }
    ?>
    <!-- contact -->
    <p id="contact_ref">contact</p>
    <?php 
        $fichier = '/contact.php';
        if (file_exists($dossier . $fichier)) {
            require_once($dossier . $fichier);
        } else {
            echo "Le fichier $fichier n'a pas été trouvé pas";
        }
    ?>
    <!-- CDN BOOSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>