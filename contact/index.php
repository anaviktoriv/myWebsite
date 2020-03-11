<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <title>Accueil</title>
</head>

<body class="body-accueil">
  <header>
    <nav class="menu-wrap">
      <!-- this checkbox is used to use it's pseudo class checked to make the menu appear -->
      <input type="checkbox" class="toggler">
      <div class="hamburger">
        <!-- this div vill be used to create lines for the humburger -->
        <div></div>
      </div>

      <div class="menu">
        <div>
          <div>

            <ul class="nav-bar">
              <li></li>
              <li><a class="link" href="../index.html">Accueil</a></li>
              <li><a class="link" href="../me-connaitre/index.html">Me connaître</a></li>
              <li class="nav-bar-dropdown">
                <div class="cv-and-arrow-wrapper" id="cv-link">
                  <a class="link" href="#">CV</a>
                  <div class="arrow" id="arrow-submenu"></div>
                </div>

                <ul class="dropdown-list" id="dropdown-submenu">
                  <li><a class="link submenu-link" href="../cv/index.html">Numérique</a></li>
                  <li><a class="link submenu-link" href="#">PDF</a></li>
                  <li><a class="link submenu-link" href="#">À imprimer</a></li>
                </ul>
              </li>

              <li><a class="link" href="../portfolio/index.html">Portfolio</a></li>
              <li><a class="link active" href="../contact/index.html">Contact</a></li>
              <li><a class="link" href="../mentions-legales/index.html">Mentions Légales</a></li>
              <li></li>
            </ul>

          </div>
        </div>
      </div>

    </nav>
  </header>

  <script src="../assets/js/script.js"></script>
</body>

</html>