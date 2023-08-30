<?php
require_once('Modelo/class.conexion.php');
require_once('Modelo/class.usuario.php');

function registro($nombre, $apellido, $correo, $contrasena){
    $usuario = new Usuarios();
    $nombre_check = preg_match('~^(?=.{3,40}$)[a-zñáéíóúA-ZÑÁÉÍÓÚ](\s?[a-zñáéíóúA-ZÑÁÉÍÓÚ])*$~',$nombre);
    $apellido_check = preg_match('~^(?=.{3,40}$)[a-zñáéíóúA-ZÑÁÉÍÓÚ](\s?[a-zñáéíóúA-ZÑÁÉÍÓÚ])*$~',$apellido);
    $contrasena_check = preg_match('~^[A-ZÑa-zñ0-9!@#$%^&*.()_]{2,40}$~i', $contrasena);
    $correo_check = preg_match('~^[a-zA-Z0-9.!#$%&*+=?^_{|}]+@[a-zA-Z0-9]+(?:\.[a-zA-Z0-9]+)*$~', $correo);

    if($nombre_check && $apellido_check && $contrasena_check && $correo_check){
        $conf = $usuario->registro($nombre,$apellido,$correo,$contrasena);
        if(!$conf){
            return '<h2>Usuario ya registrado</h2>';
        }else{
            return '<h2>Ingresado con exito</h2>';
        }
    }else{
        if(!$nombre_check){
            return "<h2>Verifique el nombre del usuario</h2>";
        }
        if(!$apellido_check){
            return "<h2>Verifique el apellido del usuario</h2>";
        }
        if(!$contrasena_check){
            return "<h2>Verifique la contraseña ingresada</h2>";
        }
        if(!$correo_check){
            return "<h2>Verifique el correo del usuario</h2>";
        }
    }

}

?>