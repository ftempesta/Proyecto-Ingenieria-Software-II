<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Get a Pet</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="../View/img/favicon.png" rel="icon">
  <link href="../View/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap css -->
  <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
  <link href="../View/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../lib/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../lib/modal-video/css/modal-video.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../View/css/style.css" rel="stylesheet">

    <div class="container">

      <div id="logo" class="pull-left">
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <?php
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

  <!-- =======================================================
    Theme Name: eStartup
    Theme URL: https://bootstrapmade.com/estartup-bootstrap-landing-page-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
  <!--- INICIO PERFIL-->
  <?php

    include '../Model/conexion.php';

    $getPubId = "SELECT pub_id, usu_id, pub_estado FROM publicacion WHERE masc_id = ". $_GET['id'] .";";
    $result = pg_query($getPubId);
    $pubId = pg_fetch_assoc($result);


    $queryGet = "SELECT * FROM public.mascota WHERE masc_id = " . $_GET['id'] . ";";
    include '../Model/conexion.php';
    $rs = pg_query($dbconn, $queryGet) or die("Cannot execute query: $query\n");

    while ($row = pg_fetch_row($rs)) 
    {

        echo '<section id="about-us" class="about-us padd-section wow fadeInUp">';
        echo ' <div class="container">';
        echo '   <div class="row justify-content-center">';

        echo '     <div class="col-4 col-lg-5">';
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo '       <img src="' . $row[12] . '" alt="About">';
        echo '    </div>';

        echo '     <div class="col-4 col-lg-5">';
        echo '        <div class="about-content">';

        echo '          <h2><span>'. $row[1] .'</span> '. $row[11] .'</h2>';
        echo '          <p>';
        echo '          </p>';

        echo '          <ul class="list-unstyled">';
        echo '           <li><i class="fa fa-angle-right"></i>Estado: '. $pubId['pub_estado'] .'</li>';
        echo '           <li><i class="fa fa-angle-right"></i>Raza: '. $row[10] .'</li>';
        echo '           <li><i class="fa fa-angle-right"></i>Sexo: '. $row[2] .'</li>';
        echo '           <li><i class="fa fa-angle-right"></i>Edad: '. $row[3] .'</li>';
        echo '           <li><i class="fa fa-angle-right"></i>Peso: '. $row[4] .'</li>';
        echo '           <li><i class="fa fa-angle-right"></i>Comportamiento: '. $row[6] .'</li>';
        echo '           <li><i class="fa fa-angle-right"></i>Chip: '. $row[7] .'</li>';
        echo '           <li><i class="fa fa-angle-right"></i>Tipo: '. $row[8] .'</li>';
        echo '           <li><i class="fa fa-angle-right"></i>Vacunas: '. $row[9] .'</li>';
        echo '          </ul>';
        echo '        </div>';
        echo '      </div>';
        echo '    </div>';
        echo '  </div>';

        if($_SESSION['usuario_id'] == $pubId['usu_id'])
        {
          echo '<section id="hero" class="hero-container">';
          echo '<center><a id="adoptar3" href="../Model/actualizar.php?id='. $_GET['id'] .'" class="btn-get-started">Actualizar Estado!</a></center>';
          echo '  <script type = "text/javascript">
                            document.getElementById("adoptar3").onclick = function(){
                                    alert("Vas a actualizar el estado de tu ". $row[5] ."!");
                            }
                      </script>';
        }
        else
        {
          echo '<section id="hero" class="hero-container">';
          echo '<center><a id="adoptar3" href="../Model/adoptar.php?id='. $_GET['id'] .'" class="btn-get-started">Adoptar!</a></center>';
          echo '  <script type = "text/javascript">
                            document.getElementById("adoptar3").onclick = function(){
                                    alert("Mascota adoptada! Enseguida verás los datos del dueño para que se pongan en contacto");
                            }
                   </script>';
        }
    }
  ?>

  <!--==========================
    Footer
  ============================-->

  <!-- JavaScript Libraries -->
  <script src="../View/lib/jquery/jquery.min.js"></script>
  <script src="../View/lib/jquery/jquery-migrate.min.js"></script>
  <script src="../View/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../View/lib/superfish/hoverIntent.js"></script>
  <script src="../View/lib/superfish/superfish.min.js"></script>
  <script src="../View/lib/easing/easing.min.js"></script>
  <script src="../View/lib/modal-video/js/modal-video.js"></script>
  <script src="../View/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="../View/lib/wow/wow.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="../View/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
