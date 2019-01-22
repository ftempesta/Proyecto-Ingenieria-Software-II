<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Get a Pet</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap css -->
  <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
  <link href="View/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="View/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="View/lib/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
  <link href="View/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="View/lib/animate/animate.min.css" rel="stylesheet">
  <link href="View/lib/modal-video/css/modal-video.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="View/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: eStartup
    Theme URL: https://bootstrapmade.com/estartup-bootstrap-landing-page-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
  <header id="header" class="header header-hide">
    <div class="container">

      <div id="logo" class="pull-left">
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Inicio</a></li>
          <li><a href="View/registrar-usuario.php">Registrar</a></li>
          <li><a href="View/iniciar-sesion.php">Iniciar Sesión</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero" class="wow fadeIn">
    <div class="hero-container">
      <h1>Bienvenido a Get a Pet</h1>
      <?php
          include 'Model/conexion.php';
      ?>
      <!--<h2>Elegant Bootstrap Template for Startups, Apps &amp; more...</h2>-->
      <img src="/View/img/hero-img.png" alt="Hero Imgs">
      <a href="publicar-mascota.php" class="btn-get-started scrollto">Publicar Mascota</a>
      <!--<div class="btns">
        <a href="#"><i class="fa fa-apple fa-3x"></i> App Store</a>
        <a href="#"><i class="fa fa-play fa-3x"></i> Google Play</a>
        <a href="#"><i class="fa fa-windows fa-3x"></i> windows</a>
      </div>-->
    </div>
  </section>

  <!--==========================
    Get Started Section
  ============================-->

  <section id="get-started" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2>Mascotas buscando hogar</h2>
       <!-- <p class="separator">Integer cursus bibendum augue ac cursus .</p>-->

      </div>
    </div>

    <div class="container">
      
      <div class="row">

        <div class="col-md-6 col-lg-4">
          <div class="feature-block">

            <img src="/View/img/mascotas/perro.jpg" alt="img" class="img-thumbnail">
            <h4>Floffy</h4>
            <p>Perrito muy tranquilo ideal para departamento</p>
            <a href="perfil-mascota.php">Adoptar</a>

          </div>
        </div>




        <div class="col-md-6 col-lg-4">
          <div class="feature-block">

            <img src="/View/img/mascotas/timon.jpg" alt="img" class="img-thumbnail">
            <h4>Timón</h4>
            <p>Encantadora zuricata conocida por su actuación en el rey león</p>
            <a href="#">Adoptar</a>

          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="feature-block">

            <img src="/View/img/mascotas/cat.jpg" alt="img" class="img-thumbnail">
            <h4>Bigotes</h4>
            <p>Gato muy gruñón y bastardito que se enoja por todo</p>
            <a href="#">Adoptar</a>

          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="feature-block">

            <img src="/View/img/mascotas/chimuelo.jpg" alt="img" class="img-thumbnail">
            <h4>Chimuelo</h4>
            <p>Pajarito muy tímido que le gusta estar siempre muy quieto</p>
            <a href="#">Adoptar</a>

          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="feature-block">

            <img src="/View/img/mascotas/gato.jpg" alt="img" class="img-thumbnail">
            <h4>Garrientos</h4>
            <p>Gato vacunado y buena onda</p>
            <a href="#">Adoptar</a>

          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="feature-block">

            <img src="/View/img/mascotas/perro2.jpeg" alt="img" class="img-thumbnail">
            <h4>Firulais</h4>
            <p>Perro muy elegante que come solo comida cara</p>
            <a href="#">Adoptar</a>
          </div>
        </div>
      </div>
    </div>


  </section>

  
  <!--==========================
    Footer
  ============================-->
  <footer class="footer">
    <div class="container">
      <div class="row">

        <div class="col-md-12 col-lg-4">
          <div class="footer-logo">

            <a class="navbar-brand" href="#">Get a Pet</a>
            <p>Get a pet es una aplicación utilizada para mejorar el flujo de la adopción de mascotas.</p>

          </div>
        </div>
      </div>
  </footer>




  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- JavaScript Libraries -->
  <script src="/View/lib/jquery/jquery.min.js"></script>
  <script src="/View/lib/jquery/jquery-migrate.min.js"></script>
  <script src="/View/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/View/lib/superfish/hoverIntent.js"></script>
  <script src="/View/lib/superfish/superfish.min.js"></script>
  <script src="/View/lib/easing/easing.min.js"></script>
  <script src="/View/lib/modal-video/js/modal-video.js"></script>
  <script src="/View/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="/View/lib/wow/wow.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="/View/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="/View/js/main.js"></script>

</body>
</html>
