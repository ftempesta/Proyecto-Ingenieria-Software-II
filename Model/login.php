<?php

	session_start();
	include 'conexion.php';



	$email = htmlspecialchars($_POST['email']);
	$password = htmlspecialchars($_POST['contrasena']);
    
	$sql = pg_query(
        "SELECT * FROM public.usuario WHERE usu_email = '{$email}' AND usu_contrasena = '{$password}';");
	$login_check = pg_num_rows($sql);

	if($login_check > 0){
		$_SESSION['usuario'] = $email;
		echo '<script type="text/javascript">alert("Bienvenido ' . $_SESSION['usuario'] . '");location.href="../index.php";</script>';
	}
	else{
	echo '<script type="text/javascript">alert("Usuario no existente!");location.href="../View/iniciar-sesion.php";</script>';
    }
?>