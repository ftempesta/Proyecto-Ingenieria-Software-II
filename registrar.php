<?php

	include 'conexion.php';
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

	pg_close($dbconn);
?>