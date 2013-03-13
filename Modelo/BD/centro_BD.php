<?php
require_once 'GenericoBD';

class centro_BD extends GenericoBD{
    
    public function obtenerCentros(){//obtener todos los centros
        
        $conexion=  GenericoBD::conectar();
        
        $query="select * from centro order by id";
        
        $rs=  mysql_query($conexion,$query) or die(mysql_error());
        $centros=NULL;
        
        if(mysql_num_rows($rs)>0){
            
            $centros=  GenericoBD::convertir_array($rs, "centro");
            
        }
        GenericoBD::desconectar($conexion);
        return $centros;
    }
    
    public function obtenerCentrosEmpresa($empresa){//obtener todos los centros de una empresa
        
        $conexion=  GenericoBD::conectar();
        
        $query="select * from centro where nif=".$empresa->getNif();
        
        $rs=  mysql_query($conexion,$query) or die(mysql_error());
        $centros=NULL;
        
        if(mysql_num_rows($rs)>0){
            
            $centros=  GenericoBD::convertir_array($rs, "centro");
            
        }
        GenericoBD::desconectar($conexion);
        return $centros;
    }
    
    public function obtenerCentro($id_centro){//obtener un centro desde su id
        
        $conexion=  GenericoBD::conectar();
        
        $query="select * from centro where id=".$id_centro;
        
        $rs=  mysql_query($conexion, $query) or die(mysql_error());
        $centro=NULL;
        
        if(mysql_num_rows($rs)==0){
            $fila=  mysql_fetch_row($rs);
            $centro=new centro($fila);
        }
        
        GenericoBD::desconectar($conexion);
        return $centro;
    }
    
    public function obtenerCentroAusencia($ausencia_general){//obtener un centro desde una ausencia general
        
        $conexion=  GenericoBD::conectar();
        
        $query="select * from centro where id=(select centro_id from ausencia_general where id=".$ausencia_general->getId_ausencia_general().")";
        
        $rs=  mysql_query($conexion, $query) or die(mysql_error());
        $centro=NULL;
        
        if(mysql_num_rows($rs)==0){
            $fila=  mysql_fetch_row($rs);
            $centro=new centro($fila);
        }
        
        GenericoBD::desconectar($conexion);
        return $centro;
    }
    
    public function obtenerCentroTrabajador($trabajador){//obtener un centro desde un trabajador
        
        $conexion=  GenericoBD::conectar();
        
        $query="select * from centro where id=(select id_centro from trabajador where id=".$trabajador->getId_trabajador().")";
        
        $rs=  mysql_query($conexion, $query) or die(mysql_error());
        $centro=NULL;
        
        if(mysql_num_rows($rs)==0){
            $fila=  mysql_fetch_row($rs);
            $centro=new centro($fila);
        }
        
        GenericoBD::desconectar($conexion);
        return $centro;
    }
    
    
    
    
}

?>
