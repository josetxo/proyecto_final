<?php
require_once 'GenericoBD';
class rol_BD extends GenericoBD {
    
    public function obtenerRolPerfil($perfil){//obetener un rol desde el perfil
        
        $conexion=  GenericoBD::conectar();
        
        $query="select * from rol where id=(select idrol from usuario where id=".$trabajador->getId_perfil().")";
        
        $rs=mysql_query($conexion,$query) or die (mysql_error());
        $rol=null;
        
        if(mysql_num_rows($rs)==1){
            $fila=mysql_fetch_row($rs);
            $rol=new rol($fila);
        }
        
        GenericoBD::desconectar($conexion);
        return $rol;
    }
    
    public function obtenerRoles(){//obtener todos los roles
        
        $conexion=  GenericoBD::conectar();
        
        $query="select * from rol order by id_rol";
        
        $rs=  mysql_query($conexion,$query) or die (mysql_error());
        $roles=NULL;
        
        if(mysql_num_rows($rs)>0){
            $roles=  GenericoBD::convertir_array($rs,"rol");
        }
        
        GenericoBD::desconectar($conexion);
        return $roles;
    }
    
    public function obtenerRol($id_rol){//obtener un rol desde un id rol
        
        $conexion=  GenericoBD::conectar();
        
        $query="select * from rol where id=".$id_rol;
        
        $rs=  mysql_query($conexion, $query) or die(mysql_error());
        $rol=NULL;
        
        if(mysql_num_rows($rs)==0){
            $fila=  mysql_fetch_row($rs);
            $rol=new rol($fila);
        }
        
        GenericoBD::desconectar($conexion);
        return $rol;
    }
    
    
}

?>
