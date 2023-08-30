<?php

session_start();
require_once("Modelo/class.conexion.php");
require_once("Modelo/class.comentario.php");

function agregar($id, $comentario){

    if($id){
        $coment = new Comentario();
        $x = $coment->agregarComentario($id, $comentario)
        return "<h2> Su comentario ha sido ingresado con exitó. </h2>";
    }else{
        return "<h2> Por favor, verifique que ha iniciado sesión. </h2>";
    }
}

?>