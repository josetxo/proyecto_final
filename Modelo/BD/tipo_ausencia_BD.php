<?php
require_once 'GenericoBD';
class tipo_ausencia_BD extends GenericoBD {
    
    public function obtenerTipoAusenciaGeneral($ausen_gen){//obetener un tipò de ausencia segun una ausencia general
        
        $conexion=  GenericoBD::conectar();
        
        $query="select * from tipo_ausencia where id=(select tipo_ausencia_id from ausencia_general where id=".$ausen_gen->getId_ausencia_general().")";
        
        $rs=mysql_query($conexion,$query) or die (mysql_error());
        $tipo_ausen=null;
        
        if(mysql_num_rows($rs)==1){
            $fila=mysql_fetch_row($rs);
            $tipo_ausen=new tipo_ausencia($fila);
        }
        
        GenericoBD::desconectar($conexion);
        return $tipo_ausen;
    }
    
    public function obtenerTiposAusencias(){//obtener todos los tipos de ausencia
        
        $conexion=  GenericoBD::conectar();
        
        $query="select * from tipo_ausencia order by id";
        
        $rs=  mysql_query($conexion,$query) or die (mysql_error());
        $tipos_ausencia=NULL;
        
        if(mysql_num_rows($rs)>0){
            $tipos_ausencia=  GenericoBD::convertir_array($rs,"tipo_ausencia");
        }
        
        GenericoBD::desconectar($conexion);
        return $tipos_ausencia;
    }
    
    public function obtenerTipoAusencia($id_tipo_ausencia){//obtener un tipo de ausencia desde un id 
        
        $conexion=  GenericoBD::conectar();
        
        $query="select * from tipo_ausencia where id=".$id_tipo_ausencia;
        
        $rs=  mysql_query($conexion, $query) or die(mysql_error());
        $tipo_ausencia=NULL;
        
        if(mysql_num_rows($rs)==0){
            $fila=  mysql_fetch_row($rs);
            $tipo_ausencia=new tipo_ausencia($fila);
        }
        
        GenericoBD::desconectar($conexion);
        return $tipo_ausencia;
    }
    
    
}

?>
