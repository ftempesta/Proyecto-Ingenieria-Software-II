<?php
    session_start();
    include 'conexion.php';

    	//echo '<br>';
	//echo $_FILES['imagen']['name'];
	$nombre = $_FILES['imagen']['name'];
	$nombrer = strtolower($nombre);
	$cd=$_FILES['imagen']['tmp_name'];
	$ruta = "../view/uploads/" . $_FILES['imagen']['name'];
	$destino = "img/".$nombrer;
	$resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
	//echo $destino;
	//echo '<br>';
	//echo $resultado;
	//echo '<br>';
	//echo $ruta;
	if (!empty($resultado))
	{
	    echo "el archivo ha sido movido exitosamente";
    }else{
        echo "Error al subir el archivo";
    }


	$form_nombre =  htmlspecialchars($_POST["nombre"]);
	//echo $_POST['nombre'];
	$form_sexo =  htmlspecialchars($_POST['sexo']);
	//echo $_POST['sexo'];
	$form_edad =  htmlspecialchars($_POST['edad']);
	//echo $_POST['edad'];
	$form_peso =  htmlspecialchars($_POST['peso']);
	//echo $_POST['peso'];
	$form_especie =  htmlspecialchars($_POST['especie']);
	//echo $_POST['especie'];
	$form_comportamiento =  htmlspecialchars($_POST['comportamiento']);
	//echo $_POST['comportamiento'];
	$form_chip_rastreo =  htmlspecialchars($_POST['chip_rastreo']);
	//echo $_POST['chip_rastreo'];
	$form_vacuna =  htmlspecialchars($_POST['vacuna']);
	//echo $_POST['vacuna'];
	$form_telefono =  htmlspecialchars($_POST['tipo']);
	//echo $_POST['tipo'];
	$form_raza =  htmlspecialchars($_POST['raza']);
	//echo $_POST['raza'];
	$form_descripcion =  htmlspecialchars($_POST['descripcion']);
    //echo $_POST['descripcion'];
    //echo '<br><br>';
	$query = 'INSERT INTO ' . $form_especie . '
	(masc_nombre, masc_sexo, masc_edad, masc_peso, masc_especie, masc_comportamiento, masc_chip_rastreo, masc_tipo, masc_vacuna, masc_raza, masc_descripcion, masc_ruta_foto) 
values 
	(\'' . $form_nombre . '\', \'' . $form_sexo . '\', \'' . $form_edad . '\', \'' . $form_peso . '\', \'' . $form_especie . '\', \'' . $form_comportamiento . '\', \'' . $form_chip_rastreo . '\', \'' . $form_tipo . '\', \'' . $form_vacuna . '\', \'' . $form_raza . '\', \'' . $form_descripcion . '\', \'' . $ruta . '\');';
	$result = pg_query($dbconn, $query);
	
	//echo'</br>';
	//echo $ruta;
	//echo'</br>';
	//echo'</br>';
	//echo $query;








	header('Location: ../index.php');
	pg_close($dbconn);
?>