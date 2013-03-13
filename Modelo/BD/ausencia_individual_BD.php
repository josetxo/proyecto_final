<?php
require_once 'GenericoBD';

class ausencia_general_BD extends GenericoBD{
    
    public function obtenerAusenciasCentro($centro){//obtener todos las ausencias generales de un centro
        
        $conexion=  GenericoBD::conectar();
        
        $query="select * from ausencia_general where centro_id=(select id from centro where id=".$centro->getId_centro().")";
        
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
