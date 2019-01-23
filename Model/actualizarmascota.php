<?php 
    session_start();
    include 'conexion.php';

    $estado =  htmlspecialchars($_POST["estado"]);
    $getPubId = "SELECT pub_id, usu_id FROM publicacion WHERE masc_id = ". $_GET['id'] .";";
    $result = pg_query($getPubId);
    $pubId = pg_fetch_assoc($result);


    $updateEstado = "UPDATE publicacion 
                     SET pub_estado = '" . $estado  . "' 
                     WHERE masc_id = '". $_GET['id'] ."';";

    $result = pg_query($dbconn, $updateEstado);
    header('Location: ../index.php');
 ?>