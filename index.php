<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Header css-->
    <link rel="stylesheet" href="./style/header.css">

    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Landing page</title>
</head>
<body>

<?php
  $pepe = __DIR__. 'Project1.github.io/partials/header.php';
  print_r($pepe);
  include __DIR__. 'Project1.github.io/partials/header.php';
?>
    <!--HEADER-->
    <header class="header" id="inicio">
        <span class="logo">
            <img src="./media/Logo.png" href="https://www.geeksforgeeks.org/how-to-switch-the-language-of-the-page-using-javascript/" class="imgLogo">
        </span>
        <span class="menu">
          <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav ms-auto marginNavBar">
                <a class="nav-item nav-link" href="#">Administració</a>
                <a class="nav-item nav-link" href="#">Jocs</a>
                <a class="nav-item nav-link" href="#">Contacta</a>
                <a class="nav-item nav-link" href="#">
                 
                </a>
              </div>
            </div>
          </nav>
        </span>
    </header>

    <!--CAROUSEL-->
  <div class="alinearWeb">
    <div class="padding-carousel">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://wowslider.com/sliders/demo-80/data1/images/sheet546475_1920.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./media/Entrada cep.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://wowslider.com/sliders/demo-80/data1/images/plumage176723_1920.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
   
    <!--EQUIPO CREATIVO-->
    <div class="equipo">
      <div class="izquierda"></div>
      <div class="centro">
        <h3>Coneix l'equip</h3>
          <br>
        <p>
          Nosaltres som persones molt diferents amb una ambicio en comú, aprendre a programar. Som tots de diferents llocs de Barcelona.
        </p>
      </div>
      <div class="derecha"></div>
    </div>
  </div>
    <!-- JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>