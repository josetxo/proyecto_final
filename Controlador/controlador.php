<?php

require_once ('Vista/plantilla/ruta.php');

require_once ('Modelo/base/paquete_base.php');
require_once ('Modelo/BD/paquete_BD.php');

class controlador {
    public static function comprobarUsuario(){
        
    }
    
    public static function eliminarTrabajador($dni)
    {
    	$resp = trabajador_BD::eliminarTrabajador($dni);
    	
    	return $resp;
    }
    
    public static function modificarTrabajador($dni)
    {
    	$resp = trabajador_BD::ModificarTrabajador($dni);
    }
}

?>
