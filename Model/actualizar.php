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

    $getPubId = "SELECT pub_id, usu_id FROM publicacion WHERE masc_id = ". $_GET['id'] .";";
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

        echo '          <h2><span>Elija el nuevo estado para la mascota</span></h2>';
        echo '          <p>';
        echo '          </p>';

        echo '          <ul class="list-unstyled">';
        echo '           <li><i class="fa fa-angle-right"></i><h5><strong>Disponible</strong></h5> Si la mascota sigue aún disponile para que la adopten</li>';
        echo '           <li><i class="fa fa-angle-right"></i><h5><strong>En proceso de adopción</strong></h5> Si Alguien se contactó para adoptar a la mascota y aún no se concreta</li>';
        echo '           <li><i class="fa fa-angle-right"></i><h5><strong>Adoptada</strong></h5> Si es que se concretó la adopción de la mascota</li>';
        echo '          </ul>';
        echo '        </div>';
        echo '      </div>';
        echo '    </div>';
        echo '  </div>';
?>      <br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8">
                    <div class="form">
                      <?php
                echo '<form action="../Model/actualizarmascota.php?id='. $_GET['id'] .'" method="post" class="contactForm">';
                        ?>
                          <div class="form-group">
                            <select name="estado" class="form-control" data-rule="minlen:4">
                              <option>Seleccionar nuevo estado</option>
                              <option value="Disponible">Disponible</option>
                              <option value="En proceso de adopción">En proceso de adopción</option>
                              <option value="Adoptada">Adoptada</option>
                            </select>
                          <div class="validation"></div>
                          </div>
                            <div class="text-center btn-get-started"><input type="submit" methor="post" id="boton" value ="Actualizar estado!"></div>
                            <script type = "text/javascript">
                            document.getElementById("boton").onclick = function(){
                                    alert("Estado Actualizado!");
                            }
                      </script>';
                        </form>
                        </div>
                      </div>
                    </div>
                  </div>

<?php
        if($_SESSION['usuario_id'] == $pubId['usu_id'])
        {
          
        }
        else
        {
          

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
