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
        
        public static function recuperarPerfiles(){
            return perfil_BD::obtenerPerfiles();
        }

        public static function recuperarCentros(){
            return centro_BD::obtenerCentros();
        }

        public static function inserta_trabajador($trabajador){
            return trabajador_BD::insertar_trabajador($trabajador);
        }
        public static function recuperar_trabajador($dni){
            return trabajador_BD::buscarTrabajadorPorDNI($dni);
        }
        public static function modifica_trabajador($trabajador){
            return trabajador_BD::ModificarTrabajador($trabajador);
        }

        public static function elimina_trabajador($trabajador){
            return trabajador_BD::eliminoTrabajador($trabajador);
    }
}

?>
