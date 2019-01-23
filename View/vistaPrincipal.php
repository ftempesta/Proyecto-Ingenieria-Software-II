<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Get a Pet</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="View/img/favicon.png" rel="icon">
  <link href="View/img/apple-touch-icon.png" rel="apple-touch-icon">

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
       <!-- <h1><a href="#body" class="scrollto"><span>e</span>Startup</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <?php
                include 'Model/conexion.php';
                session_start();
                echo '<li class="menu-active"><a href="../index.php">Inicio</a></li>';

                if(!$_SESSION['usuario'])
                {
                      echo '<li><a href="../View/registrar-usuario.php">Registrar</a></li>';
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

  <section id="hero" class="wow fadeIn">
    <div class="hero-container">
      <h1>Bienvenido a Get a Pet</h1>
      <?php
          include 'Model/conexion.php';
      ?>
      <?php
          if(isset($_SESSION['usuario']))
          {
            //echo '<p>Hola ' . $_SESSION['usuario_nombre'] . '!</p>';
          }
      ?>
      <img src="View/img/hero-img.png" alt="Hero Imgs">
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

  <section id="get-started" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">
          
        <h2>Mascotas buscando hogar</h2>

      <button id="perro" type="button" class="btn btn-success">Solo perros</button>
      <button id="gato" type="button" class="btn btn-success">Solo gatos</button>
      <button id="borrar" type="button" class="btn btn-success">Mostrar todos</button>


      <script type = "text/javascript">
        document.getElementById("perro").onclick = function(){
            var string = "<?php  session_start(); $_SESSION['filtro'] = "perro";  ?>";
            window.location.href = 'index.php?id=perro';
        }
      </script>
      <script type = "text/javascript">
        document.getElementById("gato").onclick = function(){
            var string = "<?php  session_start(); $_SESSION['filtro'] = "gato";  ?>";
            window.location.href = 'index.php?id=gato';
        }
      </script>
      <script type = "text/javascript">
        document.getElementById("borrar").onclick = function(){
            var string = "<?php  session_start(); $_SESSION['filtro'] = "";  ?>";
            window.location.href = 'index.php?id=0';
        }
      </script>
      <br>
      <br>

    <div class="container">
      <div class="row">
        <?php 
          session_start();
          include 'Model/conexion.php';

          if(!$_GET['id'])
          {
              $queryGet = "SELECT * FROM public.mascota";
              $rs = pg_query($dbconn, $queryGet) or die("Cannot execute query: $query\n");

              while ($row = pg_fetch_row($rs)) 
              {

                $getPubId = "SELECT pub_id, usu_id, pub_estado FROM publicacion WHERE masc_id = ". $row[0] .";";
                $result = pg_query($getPubId);
                $pubId = pg_fetch_assoc($result);

                echo '<div class="col-md-6 col-lg-4">';
                echo '  <div class="feature-block">';
                echo "    <img src=\"$row[12]\" alt=\"img\" class=\"img-thumbnail\">";
                echo "    <h4>$row[1]</h4>";
                echo '    <h5>' . $pubId['pub_estado'] . '</h5>';
                echo "    <p>$row[11]</p>";
                if($_SESSION['usuario'])
                {
                  if($_SESSION['usuario_id'] == $pubId['usu_id'])
                  {
                    echo '    <a  href="View/perfil-mascota.php?id=' . $row[0] . '">Actualizar</a>';
                  }
                  else
                  {
                    echo '    <a  href="View/perfil-mascota.php?id=' . $row[0] . '">Adoptar</a>';
                  }
                  echo '  </div>';
                  echo '</div>';

                }
                else
                {
                  echo '  <a  id="adoptarr" href="">Adoptar</a>';
                  echo '  <script type = "text/javascript">
                                document.getElementById("adoptarr").onclick = function(){
                                        alert("Inicia sesión para poder adoptar una mascota.");
                                }
                          </script>';
                  echo '  </div>';
                  echo '</div>';

                }
              }
          }
          else
          {
              $queryGet = 'SELECT * FROM public.mascota WHERE masc_especie = \''. $_GET['id'] . '\';';
              $rs = pg_query($dbconn, $queryGet) or die("Cannot execute query: $query\n");

              while ($row = pg_fetch_row($rs)) 
              {

                $getPubId = "SELECT pub_id, usu_id, pub_estado FROM publicacion WHERE masc_id = ". $row[0] .";";
                $result = pg_query($getPubId);
                $pubId = pg_fetch_assoc($result);

                echo '<div class="col-md-6 col-lg-4">';
                echo '  <div class="feature-block">';
                echo "    <img src=\"$row[12]\" alt=\"img\" class=\"img-thumbnail\">";
                echo "    <h4>$row[1]</h4>";
                echo '    <h5>' . $pubId['pub_estado'] . '</h5>';
                echo "    <p>$row[11]</p>";
                if($_SESSION['usuario'])
                {
                  if($_SESSION['usuario_id'] == $pubId['usu_id'])
                  {
                    echo '    <a  href="View/perfil-mascota.php?id=' . $row[0] . '">Actualizar</a>';
                  }
                  else
                  {
                    echo '    <a  href="View/perfil-mascota.php?id=' . $row[0] . '">Adoptar</a>';
                  }
                  echo '  </div>';
                  echo '</div>';

                }
                else
                {
                  echo '  <a  id="adoptarr" href="">Adoptar</a>';
                  echo '  <script type = "text/javascript">
                                document.getElementById("adoptarr").onclick = function(){
                                        alert("Inicia sesión para poder adoptar una mascota.");
                                }
                          </script>';
                  echo '  </div>';
                  echo '</div>';

                }
              }
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
  <script src="View/lib/jquery/jquery.min.js"></script>
  <script src="View/lib/jquery/jquery-migrate.min.js"></script>
  <script src="View/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="View/lib/superfish/hoverIntent.js"></script>
  <script src="View/lib/superfish/superfish.min.js"></script>
  <script src="View/lib/easing/easing.min.js"></script>
  <script src="View/lib/modal-video/js/modal-video.js"></script>
  <script src="View/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="View/lib/wow/wow.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="View/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="View/js/main.js"></script>

</body>
</html>
