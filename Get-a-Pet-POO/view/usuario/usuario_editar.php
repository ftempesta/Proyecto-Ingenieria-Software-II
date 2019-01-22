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
          ?>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Register Section
  ============================-->
    <section id="contact" class="padd-section wow fadeInUp">
        <div class="container">
            <div class="section-title text-center">
                <h2>Registrar Usuario</h2>
                    <p>Bienvenidos a Get a Pet! Registre se para seguir utilizando nustro sistema.</p>
            </div>
        </div>
            <div class="container">
                <div class="row justify-content-center">
                        <div class="col-lg-5 col-md-8">
                                <div class="form">

                                  <form action="?c=Usuario&a=Guardar" method="post" class="contactForm">
                                    <!--id-->
                                    <div class="form-group">
                                        <input type="hidden" name="id" value="<?php echo $usr->id;?>" class="form-control"/>
                                    </div>
                                    
                                    <!--Nombre-->
                                    <div class="form-group">
                                        <input type="text" name="nombre" value="<?php echo $usr->nombre;?>" class="form-control" placeholder="Ingresar Nombre" data-rule="minlen:4"/>
                                        <div class="validation"></div>
                                    </div>

                                    <!--Apellido Paterno-->
                                    <div class="form-group">
                                        <input type="text" name="ap_paterno" value="<?php echo $usr->ap_paterno;?>" class="form-control" id="ap_paterno" placeholder="Ingresar Apellido Paterno" data-rule="minlen:4"/>
                                        <div class="validation"></div>
                                    </div>

                                    <!--Apellido Materno-->
                                    <div class="form-group">
                                        <input type="text" name="ap_materno" value="<?php echo $usr->ap_materno;?>" class="form-control" id="ap_materno" placeholder="Ingresar Apellido Materno" data-rule="minlen:4"/>
                                        <div class="validation"></div>
                                    </div>

                                    <!--Correo Eletronic-->
                                    <div class="form-group">
                                      <input type="email" name="email" value="<?php echo $usr->email;?>" class="form-control" id="email" placeholder="Ingresar Correo Electrónico" data-rule="email" data-msg="Por favor ingrese un correo electrónico válido" />
                                      <div class="validation"></div>
                                    </div>

                                    <!--Contraseña-->
                                    <div class="form-group">
                                        <input type="password" name="contrasena" value="<?php echo $usr->contrasena;?>" class="form-control" id="contrasena" placeholder="Ingresar Contraseña"/>
                                        <div class="validation"></div>
                                    </div>

                                    <!--Dirección-->
                                    <div class="form-group">
                                        <input type="text" name="direccion" value="<?php echo $usr->direccion;?>" class="form-control" id="direccion" placeholder="Ingresar Dirección" data-rule="minlen:4"/>
                                        <div class="validation"></div>
                                    </div>

                                    <!--Comuna-->
                                    <div class="form-group">
                                        <select name="comuna" class="form-control" data-rule="minlen:4">
                                            <option>Seleccionar Dirección</option>
                                            <option value="cerrillos" <?php echo $usr->comuna == 'cerrillos' ? 'selected' : ' '; ?>>Cerrillos</option>
                                            <option value="cerro-navia" <?php echo $usr->comuna == 'cerro-navia' ? 'selected' : ' '; ?>>Cerro Navia</option>
                                            <option value="conchali" <?php echo $usr->comuna == 'conchali' ? 'selected' : ' '; ?>>Conchalí</option>
                                            <option value="estacion-central">Estación Central</option>
                                            <option value="huechuraba">Huechuraba</option>
                                            <option value="independencia">Independencia</option>
                                            <option value="la-cisterna">La Cisterna</option>
                                            <option value="la-florida">La Florida</option>                                    
                                            <option value="la-granja">La Granja</option>
                                            <option value="la-pintana">La Pintana</option>
                                            <option value="la-reina">La Reina</option>
                                            <option value="las-condes">Las Condes</option>
                                            <option value="lo-barnechea">Lo Barnechea</option>
                                            <option value="lo-espejo">Lo Espejo</option>
                                            <option value="lo-prado">Lo Prado</option>
                                            <option value="macul">Macul</option>
                                            <option value="maipu">Maipú</option>
                                            <option value="nunoa">Ñuñoa</option>
                                            <option value="pedro-aguirre-cerda">Pedro Aguirre Cerda</option>
                                            <option value="penalolen">Peñalolén</option>
                                            <option value="providencia">Providencia</option>
                                            <option value="pudahuel">Pudahuel</option>
                                            <option value="quilicura">Quilicura</option>
                                            <option value="quinta-normal">Quinta Normal</option>
                                            <option value="recoleta">Recoleta</option>
                                            <option value="renca">Renca</option>
                                            <option value="san-joaquin">San Joaquín</option>
                                            <option value="san-miguel">San Miguel</option>
                                            <option value="san-ramon">San Ramón</option>
                                            <option value="santiago">Santiago</option>
                                            <option value="vitacura">Vitacura</option>
                                        </select>
                                        <div class="validation"></div>
                                    </div>

                                    <!--genero-->
                                    <div class="form-group">
                                        <input type="radio" name="genero" value="1"<?php echo $usr->genero == 1 ? 'selected' : ''; ?> class="form-control" checked> Masculino
                                        <input type="radio" name="genero" value="2"<?php echo $usr->genero == 2 ? 'selected' : ''; ?> class="form-control"> Femenino
                                        <input type="radio" name="genero" value="3"<?php echo $usr->genero == 3 ? 'selected' : ''; ?> class="form-control"> Otros  
                                        <div class="validation"></div>
                                    </div>

                                    <!--Edad-->
                                    <div class="form-group">
                                      <input type="text" name="edad" value="<?php echo $usr->edad;?>" class="form-control" id="edad" placeholder="Ingresar edad"/>
                                      <div class="validation"></div>
                                    </div>

                                    <!--Telefono-->
                                    <div class="form-group">
                                        <input type="phone" name="telefono" value="<?php echo $usr->telefono;?>" class="form-control" id="telefono" placeholder="Ingresar Telefono" data-rule="minlen:4s"/>
                                        <div class="validation"></div>
                                    </div>

                                    <!--RUT-->
                                    <div class="form-group">
                                        <input type="text" name="rut" value="<?php echo $usr->rut;?>" class="form-control" id="rut" placeholder="Ingresar RUT" data-msg="Por favor ingrese un RUT válido" data-rule="minlen:4"/>
                                        <div class="validation"></div>
                                    </div>

                                    <!--TODO FALTA LA FOTO-->


                                    <!--TODO Arreglar funccion del boton-->
                                    <div class="text-center"><input type="submit" methor="post" id="boton" value ="Registar Usuario"></div>
                                  </form>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
        </div>
      </section>
      <script type="text/javascript">
        document.getElementById("boton").onclick = function (){
          alert("Usuario Creado!");
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
