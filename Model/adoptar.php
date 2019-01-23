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

</head>

<body>
  <!--- INICIO PERFIL MASCOTA QLEA-->
  <?php
    session_start();
    include 'conexion.php';
    $queryGet = "SELECT * FROM public.mascota WHERE masc_id = " . $_GET['id'] . ";";
    include '../Model/conexion.php';
    $rs = pg_query($dbconn, $queryGet) or die("Cannot execute query: $query\n");



    $getDatosUsuario = "SELECT DISTINCT c.usu_id, c.usu_nombre, c.usu_email, c.usu_comuna, c.usu_telefono
                        FROM cuentasusuario c, publicacion p, mascota m
                        WHERE p.masc_id = ". $_GET['id'] ." AND p.usu_id = c.usu_id;";
    $result = pg_query($getDatosUsuario);
    $datosUsuario = pg_fetch_assoc($result);
    //$account_type = $pubId['pub_id'];

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
        echo '          <h2><span>contacto</span> Los siguientes datos son de la persona que publicó la mascota! Por favor pónganse en contacto para concretar la adopción!</h2>';
        echo '          <p>';
        echo '          </p>';
        echo '          <ul class="list-unstyled">';
        echo '           <li><i class="fa fa-angle-right"></i>Nombre: '. $datosUsuario['usu_nombre'] .'</li>';
        echo '           <li><i class="fa fa-angle-right"></i>Email: '. $datosUsuario['usu_email'] .'</li>';
        echo '           <li><i class="fa fa-angle-right"></i>Comuna: '. $datosUsuario['usu_comuna'] .'</li>';
        echo '           <li><i class="fa fa-angle-right"></i>Teléfono: '. $datosUsuario['usu_telefono'] .'</li>';
        echo '          </ul>';
        echo '        </div>';
        echo '      </div>';
        echo '    </div>';
        echo '  </div>';
        echo '<section id="hero" class="hero-container">';
        echo '<center><a id="adoptar3" href="../index.php class="btn-get-started">Volver a Inicio!</a></center>';
        echo '</section>';
        
        echo '</section>';
    }




  $getPubId = "SELECT pub_id, usu_id FROM publicacion WHERE masc_id = ". $_GET['id'] .";";
  $result = pg_query($getPubId);
  $pubId = pg_fetch_assoc($result);
  $account_type = $pubId['pub_id'];
  $insertAdopcion = "INSERT INTO adopcion (usu_id, pub_id) VALUES (". $_SESSION['usuario_id'] .", ". $account_type .");";
  $result = pg_query($dbconn, $insertAdopcion);
 
  $cambiarEstado = "UPDATE publicacion SET pub_estado = 'En proceso'
                    WHERE masc_id = ". $_GET['id'] .";";
  $result = pg_query($dbconn ,$cambiarEstado);



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
