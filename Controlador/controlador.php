<?php
require_once ('Modelo/base/paquete_base.php');
require_once ('Modelo/BD/paquete_BD.php');

class controlador {
    public static function comprobarUsuario($dni,$pass){
        return sesion::validarUsuario($dni, $pass);
    }
	
	public static function ListadoTrabajadoresAusencias()
	{
		return ausencia_individual_BD::obtenerAusenciasTotalesTodosTrabajadores();
	}
	
	public static function cambiarAusencia($id)
	{
		ausencia_individual_BD::cambiarEstadoAusencia($id);
	}
	
	public static function eliminarAusencia($id)
	{
		ausencia_individual_BD::EliminarAusenciasDeTrabajador($id);
	}
}

?>
