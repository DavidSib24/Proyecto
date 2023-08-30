<?php
session_start();
require_once("Modelo/class.conexion.php");
require_once("Modelo/class.usuario.php");

function login($username,$contrasena){

    $usuario = new Usuarios();
    $id = $usuario->login($username,$contrasena);

    if($id){
        $url = BASE_URL.'indexLogin.php';
        header("Location: $url");
    }else{
        return "<h2> Por favor, revise sus credenciales. </h2>";
    }

}

?>