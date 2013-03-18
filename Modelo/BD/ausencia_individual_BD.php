<?php
require_once 'GenericoBD.php';

class ausencia_individual_BD extends GenericoBD{
    
    public static function obtenerAusenciasTrabajador($trabajador){//obtener todas las ausencias de un trabajador
        
        $conexion=  GenericoBD::conectar();
        
        $query="select * from ausencia_individual where trabajador_id=(select id from trabajador where id=".$trabajador->getId_trabajador().")";
        
        $rs=  mysql_query($conexion,$query) or die(mysql_error());
        $ausencias=NULL;
        
        if(mysql_num_rows($rs)>0){
            
            $ausencias =  GenericoBD::convertir_array($rs, "ausencia_individual");
            
        }
        GenericoBD::desconectar($conexion);
        return $ausencias;
    }
	
	public static function obtenerAusenciasTotalesTodosTrabajadores()
	{
		$conexion = GenericoBD::conectar();
		
		$query = "SELECT * from ausencia_individual WHERE valorado='no'";
		$rs = mysql_query($query,$conexion) or die (mysql_error());
		$ausencias=NULL;
		if(mysql_num_rows($rs)>0)
		{    
            $ausencias =  GenericoBD::convertir_array($rs, "ausencia_individual");
        }
		
		return $ausencias;
	}
	
	public static function cambiarEstadoAusencia($id)
	{
		$conexion = GenericoBD::conectar();
    	
    	$query = "UPDATE ausencia_individual SET valorado='si' WHERE id='".$id."'";
    	
    	mysql_query($query,$conexion) or die (mysql_error());
	}
    
	public static function EliminarAusenciasDeTrabajador($id)
    {
    	$conexion = GenericoBD::conectar();
    	//cambio de id_trabajador a id de ausencias
    	$query = "DELETE from ausencia_individual WHERE id='".$id."'";
    	
    	$rs=mysql_query($query,$conexion) or die (mysql_error());
        if($rs){
            return TRUE;
        }else{
            return FALSE;
        }
    }
}

?>
