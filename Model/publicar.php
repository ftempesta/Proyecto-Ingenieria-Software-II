<?php
    
	include 'conexion.php';
	$form_nombre =  htmlspecialchars($_POST["nombre"]);
	echo $_POST['nombre'];
	$form_sexo =  htmlspecialchars($_POST['sexo']);
	echo $_POST['sexo'];
	$form_edad =  htmlspecialchars($_POST['edad']);
	echo $_POST['edad'];
	$form_peso =  htmlspecialchars($_POST['peso']);
	echo $_POST['peso'];
	$form_especie =  htmlspecialchars($_POST['especie']);
	echo $_POST['especie'];
	$form_comportamiento =  htmlspecialchars($_POST['comportamiento']);
	echo $_POST['comportamiento'];
	$form_chip_rastreo =  htmlspecialchars($_POST['chip_rastreo']);
	echo $_POST['chip_rastreo'];
	$form_vacuna =  htmlspecialchars($_POST['vacuna']);
	echo $_POST['vacuna'];
	$form_telefono =  htmlspecialchars($_POST['telefono']);
	echo $_POST['telefono'];
	$form_raza =  htmlspecialchars($_POST['raza']);
	echo $_POST['raza'];
	$form_descripcion =  htmlspecialchars($_POST['descripcion']);
    echo $_POST['descripcion'];
    
    // ARREGLAR LOS PARAMETROS DE INSERT EN PERRO O GATO
	$query = 'insert INTO ' . $form_especie . '
	(usu_nombre, usu_ap_paterno, usu_ap_materno, usu_email, usu_contrasena, usu_direccion, usu_comuna, usu_edad, usu_sexo, usu_telefono, usu_rut) 
values 
	(\'' . $form_nombre . '\', \'' . $form_ap_paterno . '\', \'' . $form_ap_materno . '\', \'' . $form_email . '\', \'' . $form_contrasena . '\', \'' . $form_direccion . '\', \'' . $form_comuna . '\', \'' . $form_edad . '\', \'' . $form_sexo . '\', \'' . $form_telefono . '\', \'' . $form_rut . '\');';
	
	$result = pg_query($dbconn, $query);
	echo '<h1>Se agregó un nombre</h1>';

	header('Location: ../index.php');
	
	pg_close($dbconn);
?>