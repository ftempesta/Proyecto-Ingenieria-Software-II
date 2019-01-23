<?php
    session_start();
    include 'conexion.php';

    //SUBIDA ARCHIVO

	$nombre = $_FILES['imagen']['name'];
	$nombrer = strtolower($nombre);
	$cd=$_FILES['imagen']['tmp_name'];
	$ruta = "../view/uploads/" . $_FILES['imagen']['name'];
	$destino = "img/".$nombrer;
	$resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);

	if (!empty($resultado))
	{
	    echo "el archivo ha sido movido exitosamente";
    }else{
        echo "Error al subir el archivo";
    }


	$form_nombre =  htmlspecialchars($_POST["nombre"]);
	$form_sexo =  htmlspecialchars($_POST['sexo']);
	$form_edad =  htmlspecialchars($_POST['edad']);
	$form_peso =  htmlspecialchars($_POST['peso']);
	$form_especie =  htmlspecialchars($_POST['especie']);
	$form_comportamiento =  htmlspecialchars($_POST['comportamiento']);
	$form_chip_rastreo =  htmlspecialchars($_POST['chip_rastreo']);
	$form_vacuna =  htmlspecialchars($_POST['vacuna']);
	$form_tipo =  htmlspecialchars($_POST['tipo']);
	$form_raza =  htmlspecialchars($_POST['raza']);
	$form_descripcion =  htmlspecialchars($_POST['descripcion']);

	// Query para insertar los datos obtenidos, a la base de datos
	$query = 'INSERT INTO ' . $form_especie . '
	(masc_nombre, masc_sexo, masc_edad, masc_peso, masc_especie, masc_comportamiento, masc_chip_rastreo, masc_tipo, masc_vacuna, masc_raza, masc_descripcion, masc_ruta_foto, masc_estado) 
	values 
	(\'' . $form_nombre . '\', \'' . $form_sexo . '\', \'' . $form_edad . '\', \'' . $form_peso . '\', \'' . $form_especie . '\', \'' . $form_comportamiento . '\', \'' . $form_chip_rastreo . '\', \'' . $form_tipo . '\', \'' . $form_vacuna . '\', \'' . $form_raza . '\', \'' . $form_descripcion . '\', \'' . $ruta . '\', \'disponible\');';
	$result = pg_query($dbconn, $query);

	// El usuario que realizó la publicación ahora es un dueño:
	$query = 'INSERT INTO dueno
	(usu_nombre, usu_ap_paterno, usu_ap_materno, usu_email, usu_contrasena, usu_direccion, usu_comuna, usu_edad, usu_sexo, usu_telefono, usu_rut) 
	values 
	(\'' . $_SESSION['usuario_nombre'] . '\', \'' . $_SESSION['usuario_ap_paterno'] . '\', \'' . $_SESSION['usuario_ap_materno'] . '\', \'' . $_SESSION['usuario_email'] . '\', \'' . $_SESSION['usuario_contrasena'] . '\', \'' . $_SESSION['usuario_direccion'] . '\', \'' . $_SESSION['usuario_comuna'] . '\', \'' . $_SESSION['usuario_edad'] . '\', \'' . $_SESSION['usuario_genero'] . '\', \'' . $_SESSION['usuario_telefono'] . '\', \'' . $_SESSION['usuario_rut'] . '\');';
	$result = pg_query($dbconn, $query);


	$queryGet = "SELECT max(masc_id) FROM public.mascota";
    $rs = pg_query($dbconn, $queryGet) or die("Cannot execute query: $query\n");
    while ($row = pg_fetch_row($rs)) {
    	echo $row[0];
    	$_SESSION['mascota_id'] = $row[0];
    }

	// Hay que proceder a la creación de la publicación
	$queryInsertPublicacion = 'INSERT INTO public.publicacion (pub_estado, usu_id, masc_id) values (\'Disponible\', \'' . $_SESSION['usuario_id'] . '\', \''. $_SESSION['mascota_id'] .'\')';

	$result = pg_query($dbconn, $queryInsertPublicacion);
	header('Location: ../index.php');
	pg_close($dbconn);
?>











