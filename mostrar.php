<?php

	include 'conexion.php';
	
	echo '<h2>form data retrieved by using $_POST variable<h2/>'

	$firstname = $_POST['nombre'];
	$lastname = $_POST['ap_paterno'];

	// display the results
	echo 'Your name is ' . $lastname .' ' . $firstname;
	}

	pg_close($dbconn);
?>