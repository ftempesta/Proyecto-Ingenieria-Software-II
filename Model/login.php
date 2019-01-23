<?php

	session_start();
	include 'conexion.php';

	$email = htmlspecialchars($_POST['email']);
	$password = htmlspecialchars($_POST['contrasena']);

	$query = "SELECT * FROM cuentasusuario WHERE usu_email = '$email'"; 
	$rs = pg_query($dbconn, $query) or die("Cannot execute query: $query\n");

	while ($row = pg_fetch_row($rs)) {
		$_SESSION['usuario_id'] = $row[0];
	    $_SESSION['usuario_nombre'] = $row[1];
		$_SESSION['usuario_ap_paterno'] = $row[2];
		$_SESSION['usuario_ap_materno'] = $row[3];
		$_SESSION['usuario_email'] =  $row[4];
		$_SESSION['usuario_contrasena'] =  $row[5];
		$_SESSION['usuario_direccion'] = $row[6];
		$_SESSION['usuario_comuna'] = $row[7];
		$_SESSION['usuario_edad'] = $row[8];
		$_SESSION['usuario_genero'] = $row[9];
		$_SESSION['usuario_telefono'] = $row[10];
		$_SESSION['usuario_rut'] = $row[11];
	}
    
	$sql = pg_query(
        "SELECT * FROM public.usuario WHERE usu_email = '{$email}' AND usu_contrasena = '{$password}';");
	$login_check = pg_num_rows($sql);
	if($login_check > 0){
		$_SESSION['usuario'] = $email;
		echo '<script type="text/javascript">alert("Bienvenido ' . $_SESSION['usuario_nombre'] . '");location.href="../index.php";</script>';
	}
	else{
	echo '<script type="text/javascript">alert("Correo o contraseña incorrecta!!");location.href="../View/iniciar-sesion.php";</script>';
    }
?>