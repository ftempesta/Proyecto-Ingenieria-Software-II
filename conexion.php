<?php

	// detalles de la conexion
	$conn_string = "host=localhost port=5432 dbname=getapet user=postgres password=getapet options='--client_encoding=UTF8'";

	// establecemos una conexion con el servidor postgresSQL
	$dbconn = pg_connect($conn_string);

	// Revisamos el estado de la conexion en caso de errores. 
	if(!$dbconn) {
	echo "Error: No se ha podido conectar a la base de datos";
	} else {
				echo "<p>Conexión exitosa</p>";
			}

	//$query = 'INSERT INTO test (username) VALUES (\'lashet\')';
	//$result = pg_query($dbconn, $query);

	// Close connection
	//pg_close($dbconn);


?>