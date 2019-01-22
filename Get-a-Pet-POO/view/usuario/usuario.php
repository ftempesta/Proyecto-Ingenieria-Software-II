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

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap css -->
  <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/modal-video/css/modal-video.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

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
          <?php
                echo '<li class="menu-active"><a href="../index.php">Inicio</a></li>';
                if(!$_SESSION['usuario'])
                {
                      echo '<li><a href="?c=Usuario&a=Crud&id= <?php echo $r->id; ?">Registrar</a></li>';
                      echo '<li><a href="../View/iniciar-sesion.php">Iniciar Sesión</a></li>';
                }
                else
                {
                      echo '<li><a href="../Model/cerrar-sesion.php">Cerrar sesión</a></li>';
                }
          ?>
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
          include 'Model/database.php';
      ?>
      <?php
          if(isset($_SESSION['usuario']))
          {
            echo '<p>Bienvenido ' . $_SESSION['usuario_nombre'] . '</p>';
          }
      ?>
      <img src="img/hero-img.png" alt="Hero Imgs">
      <?php
          if(isset($_SESSION['usuario']))
          {
            echo '<a id="publicar" href="View/publicar-mascota.php" class="btn-get-started scrollto">Publicar Mascota</a>';
          }
          else
          {
            echo '<a href="" id="publicarr" class="btn-get-started scrollto">Publicar Mascota</a>';
            echo '<script type = "text/javascript">
                    document.getElementById("publicarr").onclick = function(){
                      alert("Inicia sesión para poder publicar una mascota.");
                    }
                    </script>';
          }
      ?>
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
        
        <?php 
          include 'conexion.php';
          $queryGet = "SELECT * FROM public.perro";
          $rs = pg_query($dbconn, $queryGet) or die("Cannot execute query: $query\n");
          while ($row = pg_fetch_row($rs)) {
            echo '<div class="col-md-6 col-lg-4">';
            echo '  <div class="feature-block">';
            echo "    <img src=\"$row[12]\" alt=\"img\" class=\"img-thumbnail\">";
            echo "    <h4>$row[1]</h4>";
            echo "    <p>$row[11]</p>";
            echo '    <a href="#">Adoptar</a>';
            echo '  </div>';
            echo '</div>';
          }
           $queryGet = "SELECT * FROM public.gato";
          $rs = pg_query($dbconn, $queryGet) or die("Cannot execute query: $query\n");
          while ($row = pg_fetch_row($rs)) {
            echo '<div class="col-md-6 col-lg-4">';
            echo '  <div class="feature-block">';
            echo "    <img src=\"$row[12]\" alt=\"img\" class=\"img-thumbnail\">";
            echo "    <h4>$row[1]</h4>";
            echo "    <p>$row[11]</p>";
            echo '    <a href="#">Adoptar</a>';
            echo '  </div>';
            echo '</div>';
          }
        ?>
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
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/modal-video/js/modal-video.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>