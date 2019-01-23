<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Publicar Mascota</title>
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
</head>

<body>

  <header id="header" class="header header-hide">
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
	      ?>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>

  </header><!-- #header -->
  <!--==========================
    Perfil Mascota
  ============================-->


  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>


    <script type="text/javascript">
        document.getElementById("boton").onclick = function (){
          alert("Mascota Adoptada!");
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