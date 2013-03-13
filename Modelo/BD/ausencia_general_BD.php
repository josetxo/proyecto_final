<?php
require_once 'GenericoBD';

class ausencia_individual_BD extends GenericoBD{
    
    public function obtenerAusenciasTrabajador($trabajador){//obtener todas las ausencias de un trabajador
        
        $conexion=  GenericoBD::conectar();
        
        $query="select * from ausencia_individual where trabajador_id=(select id from trabajador where id=".$trabajador->getId_trabajador().")";
        
        $rs=  mysql_query($conexion,$query) or die(mysql_error());
        $ausencias=NULL;
        
        if(mysql_num_rows($rs)>0){
            
            $ausencias=  GenericoBD::convertir_array($rs, "ausencia_general");
            
        }
        GenericoBD::desconectar($conexion);
        return $ausencias;
    }
    

}

?>
