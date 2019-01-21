<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Registrar Usuario</title>
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
       <!-- <h1><a href="#body" class="scrollto"><span>e</span>Startup</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <?php
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

  <!--==========================
    Iniciar Section
  ============================-->
    <section id="contact" class="padd-section wow fadeInUp">
        <div class="container">
            <div class="section-title text-center">
                <h2>Iniciar Sesión</h2>
                    <p>Bienvenidos a Get a Pet! Inicie su sesion para seguir utilizando nustro sistema.</p>
            </div>
        </div>
          
            <div class="container">
                <div class="row justify-content-center">
                        <div class="col-lg-5 col-md-8">
                                <div class="form">
                                  <form action="../Model/login.php" method="post" role="form" class="contactForm">
                                   <!--Correo Eletronic-->
                                    <div class="form-group">
                                      <input type="email" name="email" class="form-control" id="email" placeholder="Correo Electrónico" data-rule="email" data-msg="Por favor ingrese un correo electrónico válido" />
                                      <div class="validation"></div>
                                    </div>

                                    <!--Contraseña-->
                                    <div class="form-group">
                                        <input type="password" name="contrasena" class="form-control" id="contrasena" placeholder="Contraseña" data-rule="password"/>
                                        <div class="validation"></div>
                                    </div>

                                    <!--TODO Arreglar funccion del boton-->
                                    <div class="text-center"><button type="submit">Ingresar</button></div> <br>

                                    <div align="center"> 
                                        <a href="registrar-usuario.html">Todavía no eres mienmbro? Registrar</a>
                                    </div>
                                  </form>
                                </div>
                              </div>
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