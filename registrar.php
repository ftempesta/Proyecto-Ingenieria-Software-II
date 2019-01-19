<?php

	include 'conexion.php';
	$form_nombre =  htmlspecialchars($_POST["nombre"]);
	echo $form_nombre;

	/*
	echo $_POST['nombre'];

	$form_nombre = $_POST['nombre'];
	$form_ap_paterno = $_POST['ap_paterno'];
	$form_ap_materno = $_POST['ap_materno'];
	$form_email = $_POST['email'];
	$form_contrasena = $_POST['contrasena'];
	$form_confirm_contrasena = $_POST['confirmar_contrasena'];
	$form_direccion = $_POST['direccion'];
	$form_comuna = $_POST['comuna'];
	$form_sexo = $_POST['genero'];
	$form_telefono = $_POST['telefono'];
	$form_rut = $_POST['rut'];

	echo form_nombre;
	echo form_comuna;

	$query = "INSERT INTO usuario (usu_nombre, usu_ap_paterno, usu_ap_materno, usu_email, usu_contraseña, usu_direccion, usu_comuna, usu_sexo, usu_telefono, usu_rut) VALUES ($_POST['nombre'], $_POST['ap_paterno'], $_POST['ap_materno'], $_POST['email'], $_POST['contrasena'],  $_POST['confirmar_contrasena'], $_POST['direccion'], $_POST['comuna'], $_POST['genero'], $_POST['telefono'], $_POST['rut'])";

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