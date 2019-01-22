<?php
require_once 'model/database.php';

$controller = 'usuario';

if(!isset($_REQUEST['c'])){
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    $controller->Index();
}else{
    // Obtener controlador que se desea cargar
    $controller = strtolower($_REQUEST['c']);
    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';

    //Instancia el controlador
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;

    //Llama la accion
    call_user_func( array( $controller, $accion ));
}

?>