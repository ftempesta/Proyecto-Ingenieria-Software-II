<?//php

	// detalles de la conexion
	$conn_string = "host=localhost port=5433 dbname=get_a_pet user=postgres password=postgres options='--client_encoding=UTF8'";

	// establecemos una conexion con el servidor postgresSQL
	$dbconn = pg_connect($conn_string);

	// Revisamos el estado de la conexion en caso de errores. 
	if(!$dbconn) {
	echo "Error: No se ha podido conectar a la base de datos\n";
	} else {
				echo "Conexión exitosa\n";
			}

	//$query = 'INSERT INTO test (username) VALUES (\'lashet\')';
	//$result = pg_query($dbconn, $query);

	// Close connection
	//pg_close($dbconn);


?>