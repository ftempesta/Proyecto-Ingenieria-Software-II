<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Registrar Usuario</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="/View/img/favicon.png" rel="icon">
  <link href="/View/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap css -->
  <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
  <link href="/View/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="/View/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="/View/lib/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
  <link href="/View/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="/View/lib/animate/animate.min.css" rel="stylesheet">
  <link href="/View/lib/modal-video/css/modal-video.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="/View/css/style.css" rel="stylesheet">

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
          <li><a href="index.php">Inicio</a></li>
          <li><a href="/View/registrar-usuario.php">Registrar</a></li>
          <li><a href="/View/iniciar-sesion.php">Iniciar Sesión</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Publicar Mascota
  ============================-->
    <section id="contact" class="padd-section wow fadeInUp">
        <div class="container">
            <div class="section-title text-center">
                <h2>Publicar Mascota</h2>
                    <p>Bienvenidos a Get a Pet! Ingrese los datos de la mascota que desea publicar.</p>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8">
                    <div class="form">
                        <form action="../Model/publicar.php" method="post" class="contactForm">
                            <!--Nombre-->
                            <div class="form-group">
                                <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre de la mascota">
                                <div class="validation"></div>
                            </div>

                            <!--FOTO DE LA MASCOTA-->

                            <!--sexo-->
                            <div class="input-group" id="sexo">
                                <span class="radio">
                                <label>
                                    <input type="radio" class="radiobox" name="sexo">
                                    <span> Macho</span> 
                                </label>
                                <label>
                                    <input type="radio" class="radiobox" name="sexo">
                                    <span> Hembra</span> 
                                </label>
                                </span>
                            </div>

                            <!--edad-->
                            <div class="form-group">
                                <input type="text" name="edad" class="form-control" id="edad" placeholder="Edad de la mascota">
                                <div class="validation"></div>
                            </div>

                            <!--Peso-->
                            <div class="form-group">
                                <input type="text" name="peso" class="form-control" id="-peso" placeholder="Peso de la mascota">
                                <div class="validation"></div>
                            </div>

                            <!--Especie-->
                            <div class="input-group" id="especie">
                                <span class="radio">
                                <label>
                                    <input type="radio" class="radiobox" name="especie">
                                    <span> Perro</span> 
                                </label>
                                <label>
                                    <input type="radio" class="radiobox" name="especie">
                                    <span> Gato</span> 
                                </label>
                                </span>
                            </div>

                            <!-- TODO Comportamiento-->
                            <div class="form-group">
                                <textarea class="form-control" name="comportamiento" rows="5" data-msg="Please write something for us" placeholder="Comportamiento usual de la mascota"></textarea>
                                <div class="validation"></div>
                            </div>

                            <!--Chipe de rastreo-->
                            <div class="input-group" id="chip_rastreo">
                                <span class="radio"> Chip de Rastreo
                                <label>
                                    <input type="radio" class="radiobox" name="chip_rastreo">
                                    <span> Sí</span> 
                                </label>
                                <label>
                                    <input type="radio" class="radiobox" name="chip_rastreo">
                                    <span> No</span> 
                                </label>
                                </span>
                            </div>

                            <!--Vacunas-->
                            <div class="form-group">
                                <input type="text" name="vacuna" class="form-control" id="vacuna" placeholder="Vacunas de la mascota"/>
                                <div class="validation"></div>
                            </div>
                            

                            <!--TODO Tipo-->
                            <div class="form-group">
                                <input type="phone" name="telefono" class="form-control" id="telefono" placeholder="Ingresar Telefono"/>
                                <div class="validation"></div>
                            </div>

                            <!--Raza-->
                            <div class="form-group">
                                <input type="text" name="raza" class="form-control" id="raza" placeholder="Raza de la mascota">
                                <div class="validation"></div>
                            </div>

                            <!--Descripcion-->
                            <div class="form-group">
                                <textarea class="form-control" name="descripcion" rows="5" data-msg="Please write something for us" placeholder="Descripción de la mascota"></textarea>
                                <div class="validation"></div>
                            </div>

                            <!--TODO Arreglar funccion del boton-->
                            <div class="text-center"><input type="submit" methor="post" id="boton" value ="Publicar Mascota"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript">
        document.getElementById("boton").onclick = function (){
          alert("Mascota Publicada!");
          //location.href="../index.php";
        }
      </script>
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
