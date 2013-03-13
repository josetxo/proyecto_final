<?php
require_once 'GenericoBD';

class trabajador_BD extends GenericoBD{
    
    public function obtenerTrabajadores(){//obtener todos los trabajadores
        
        $conexion=  GenericoBD::conectar();
        
        $query="select * from trabajador";
        
        $rs=  mysql_query($conexion,$query) or die(mysql_error());
        $trabajadores=NULL;
        
        if(mysql_num_rows($rs)>0)
        {
            $trabajadores=  GenericoBD::convertir_array($rs, "trabajador");
        }
        GenericoBD::desconectar($conexion);
        return $trabajadores;
    }
    
    public function obtenerTrabajadoresCentro($centro){//obtener todos los trabajadores de un centro
        
        $conexion=  GenericoBD::conectar();
        
        ///// FALLO EN EL CENTRO
        $query="select * from trabajador where id_centro=(select id from centro where id=".$cetro->getId_centro().")";
        
        $rs=  mysql_query($conexion,$query) or die(mysql_error());
        $trabajadores=NULL;
        
        if(mysql_num_rows($rs)>0){
            
            $trabajadores=  GenericoBD::convertir_array($rs, "trabajador");
            
        }
        GenericoBD::desconectar($conexion);
        return $trabajadores;
    }
    
    public function obtenerTrabajador($id_trabajador){//obtener un trabajador desde su id
        
        $conexion=  GenericoBD::conectar();
        
        $query="select * from trabajador where id=".$id_trabajador;
        
        $rs=  mysql_query($conexion, $query) or die(mysql_error());
        $trabajador=NULL;
        
        if(mysql_num_rows($rs)==0){
            $fila=  mysql_fetch_row($rs);
            $trabajador=new trabajador($fila);
        }
        
        GenericoBD::desconectar($conexion);
        return $trabajador;
    }
    
    public function obtenerTrabajadorAusencia($ausencia_individual){//obtener un trabajador desde una ausencia individual
        
        $conexion=  GenericoBD::conectar();
        
        $query="select * from trabajador where id=(select trabajador_id from ausencia_individual where id=".$ausencia_individual->getId_ausencia().")";
        
        $rs=  mysql_query($conexion, $query) or die(mysql_error());
        $trabajador=NULL;
        
        if(mysql_num_rows($rs)==0){
            $fila=  mysql_fetch_row($rs);
            $trabajador=new trabajador($fila);
        }
        
        GenericoBD::desconectar($conexion);
        return $trabajador;
    }
    
    public function obtenerTrabajadoresPerfil($perfil){//obtener todos los trabajadores de un perfil
        
        $conexion=  GenericoBD::conectar();
        
        $query="select * from trabajador where id_perfil=(select id from perfil where id=".$perfil->getId_perfil().")";
        
        $rs=  mysql_query($conexion, $query) or die(mysql_error());
        $trabajadores=NULL;
        
        if(mysql_num_rows($rs)>0){
            
            $trabajadores=  GenericoBD::convertir_array($rs, "trabajador");
            
        }
        GenericoBD::desconectar($conexion);
        return $trabajadores;
    }
}

?>
