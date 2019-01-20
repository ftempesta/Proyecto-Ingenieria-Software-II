<?php
	session_start();
	unset($_SESSION['usuario']);
	session_destroy();
	echo '<script type="text/javascript">alert("Sesión cerrada! Vuelve pronto!");location.href="../View/iniciar-sesion.php";</script>';
	exit;
?>