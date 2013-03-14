<?php
require_once ('Modelo/base/paquete_base.php');
require_once ('Modelo/BD/paquete_BD.php');

class controlador {
    public static function comprobarUsuario($dni,$pass){
        return sesion::validarUsuario($dni, $pass);
    }
}

?>
