<?php
		session_start();

		//$host = "localhost"

		// detalles de la conexion
		$conn_string = "host=localhost port=5433 dbname=get_a_pet user=postgres password=postgres options=--client_encoding=UTF8";
		//$conn_string = "host=localhost port=5432 dbname=postgres user=postgres password=getapetg options=--client_encoding=UTF8";
		//no estoy seguro si, options = lleva doble comilla, o solo 1, al parecer no es tan relevante.

		// establecemos una conexion con el servidor postgresSQL
		$dbconn = pg_connect($conn_string);

		// Revisamos el estado de la conexion en caso de errores. 
		if(!$dbconn) {
		echo "Error: No se ha podido conectar a la base de datos";
		} else {
					$conexion = '<p>Conexión exitosa</p>';
					//echo $conexion;
				}


		// INSERT FuncIONANDO! 

		/*$query = 'insert INTO adoptador
	(usu_nombre, usu_ap_paterno, usu_ap_materno, usu_email, usu_contrasena, usu_direccion, usu_comuna, usu_edad, usu_sexo, usu_telefono, usu_rut) 
values 
	(\'Felipe\', \'Parra\', \'Maldonado\', \'daniel.diaz@mail.com\', \'newpassword1234\', \'av.Los Pajaritos\', \'Maipu\', 34, \'Masculino\', \'+56955555555\', \'18111200-5\'),
	(\'Juan\', \'Perez\', \'Gutierrez\', \'juanperez@gmail.com\', \'contrasena1234\', \'av.Portales\', \'Estacion Central\', 23, \'Masculino\', \'+56911111111\', \'17553698-1\'),
	(\'Daniela\', \'Salas\', \'Morales\', \'daniela.s@gmail.com\', \'pass1234\', \'av.Las Sophoras\', \'Estacion Central\', 21, \'F\', \'+56922211448\', \'18777666-3\');';
		$result = pg_query($dbconn, $query);

		echo '<h1>Se agregó un nombre</h1>';

		*/
		// Close connection
		//pg_close($dbconn);


?>