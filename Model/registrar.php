<?php
	session_start();

	include 'conexion.php';
	$form_nombre =  htmlspecialchars($_POST["nombre"]);
	echo $_POST['nombre'];
	$_SESSION['usuario_nombre'] = htmlspecialchars($_POST["nombre"];
		
	$form_ap_paterno =  htmlspecialchars($_POST['ap_paterno']);
	echo $_POST['ap_paterno'];
	$form_ap_materno =  htmlspecialchars($_POST['ap_materno']);
	echo $_POST['ap_materno'];
	$form_email =  htmlspecialchars($_POST['email']);
	echo $_POST['email'];
	$form_contrasena =  htmlspecialchars($_POST['contrasena']);
	echo $_POST['contrasena'];
	$form_confirm_contrasena =  htmlspecialchars($_POST['confirmar_contrasena']);
	echo $_POST['confirmar_contrasena'];
	$form_direccion =  htmlspecialchars($_POST['direccion']);
	echo $_POST['direccion'];
	$form_comuna =  htmlspecialchars($_POST['comuna']);
	echo $_POST['comuna'];
	$form_sexo =  htmlspecialchars($_POST['genero']);
	echo $_POST['genero'];
	$form_telefono =  htmlspecialchars($_POST['telefono']);
	echo $_POST['telefono'];
	$form_rut =  htmlspecialchars($_POST['rut']);
	echo $_POST['rut'];
	$form_edad =  htmlspecialchars($_POST['edad']);
	echo $_POST['edad'];

	$query = 'insert INTO usuario
	(usu_nombre, usu_ap_paterno, usu_ap_materno, usu_email, usu_contrasena, usu_direccion, usu_comuna, usu_edad, usu_sexo, usu_telefono, usu_rut) 
values 
	(\'' . $form_nombre . '\', \'' . $form_ap_paterno . '\', \'' . $form_ap_materno . '\', \'' . $form_email . '\', \'' . $form_contrasena . '\', \'' . $form_direccion . '\', \'' . $form_comuna . '\', \'' . $form_edad . '\', \'' . $form_sexo . '\', \'' . $form_telefono . '\', \'' . $form_rut . '\');';
	
	$result = pg_query($dbconn, $query);
	//echo '<h1>Se agregó un nombre</h1>';

	header('Location: ../index.php');
	
	pg_close($dbconn);
?>