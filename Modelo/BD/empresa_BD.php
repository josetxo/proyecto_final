<?php
require_once 'GenericoBD';
class empresa_BD extends GenericoBD {
    
    public function obtenerEmpresaCentro($centro){//obetener la empresa de un centro
        
        $conexion=  GenericoBD::conectar();
        
        $query="select * from empresa where nif=(select nif from centro where id=".$centro->getId_centro().")";
        
        $rs=mysql_query($conexion,$query) or die (mysql_error());
        $empresa=null;
        
        if(mysql_num_rows($rs)==1){
            $fila=mysql_fetch_row($rs);
            $empresa=new empresa($fila);
        }
        
        GenericoBD::desconectar($conexion);
        return $empresa;
    }
    
    public function obtenerEmpresas(){//obtener todas las empresas
        
        $conexion=  GenericoBD::conectar();
        
        $query="select * from empresa order by nif";
        
        $rs=  mysql_query($conexion,$query) or die (mysql_error());
        $empresas=NULL;
        
        if(mysql_num_rows($rs)>0){
            $empresas=  GenericoBD::convertir_array($rs,"empresa");
        }
        
        GenericoBD::desconectar($conexion);
        return $empresas;
    }
    
    public function obtenerEmpresa($id_empresa){//obtener una empresa desde una id
        
        $conexion=  GenericoBD::conectar();
        
        $query="select * from empresa where id=".$id_empresa;
        
        $rs=  mysql_query($conexion, $query) or die(mysql_error());
        $empresa=NULL;
        
        if(mysql_num_rows($rs)==0){
            $fila=  mysql_fetch_row($rs);
            $empresa=new empresa($fila);
        }
        
        GenericoBD::desconectar($conexion);
        return $empresa;
    }
    
    
}

?>
