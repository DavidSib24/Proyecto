<?php

    require_once('../Modelo/class.conexion.php');
    session_start();
    $session_id = '';
    $_SESSION['Id_Usuario'] = '';
    session_destroy();

    if(empty($session_id) && empty($_SESSION['Id_Usuario'])){
        $url=BASE_URL.'index.php';
	    header("Location: $url");
    }

?>