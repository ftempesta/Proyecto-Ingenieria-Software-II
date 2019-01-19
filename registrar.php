<?php

	include 'conexion.php';
	$form_nombre =  htmlspecialchars($_POST["nombre"]);
	echo $form_nombre;

	/*
	echo $_POST['nombre'];

	echo form_nombre;
	echo form_comuna;

	$nombre = $_POST['nombre'];
	$ap_paterno = $_POST['ap_paterno'];
	$ap_materno = $_POST['ap_materno'];
	$email = $_POST['email'];
	$contrasena = $_POST['contrasena']; 
	$confirmar_contrasena = $_POST['confirmar_contrasena']; 
	$direccion = $_POST['direccion']; 
	$comuna = $_POST['comuna']; 
	$genero = $_POST['genero']; 
	$telefono = $_POST['telefono']; 
	$rut = $_POST['rut'];
	
	$query = "INSERT INTO usuario (usu_nombre, usu_ap_paterno, usu_ap_materno, usu_email, usu_contraseña, usu_direccion, usu_comuna, usu_sexo, usu_telefono, usu_rut) 
	VALUES (,'$nombre','$ap_paterno','$ap_materno','$email','$contrasena','$confirmar_contrasena','$direccion','$comuna','$genero','$telefono','$rut' )";

	$result = pg_query($dbconn, $query);
	*/



	$query = 'insert INTO adoptador
	(usu_nombre, usu_ap_paterno, usu_ap_materno, usu_email, usu_contrasena, usu_direccion, usu_comuna, usu_edad, usu_sexo, usu_telefono, usu_rut) 
values 
	(\'' . $form_nombre . '\', \'Parra\', \'Maldonado\', \'daniel.diaz@mail.com\', \'newpassword1234\', \'av.Los Pajaritos\', \'Maipu\', 34, \'Masculino\', \'+56955555555\', \'18111200-5\');';
	
	$result = pg_query($dbconn, $query);
	echo '<h1>Se agregó un nombre</h1>';

	pg_close($dbconn);
?>