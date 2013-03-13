<?php


class perfil_BD extends GenericoBD{
    
    public function obtenerPerfilTrabajador($trabajador){//obtener el perfil de un trabajador
        
        $conexion= GenericoBD::conectar();
        
        $query="SELECT * FROM perfil WHERE id = ( SELECT id_perfil FROM trabajador WHERE id =".$trabajador->getId_trabajador().")";
        
        $rs=  mysql_query($conexion,$query) or die (mysql_error()) ;
        $perfil=NULL;
        
        if(mysql_num_rows($rs)==1){
            $fila= mysql_fetch_assoc($rs);
            $perfil=new perfil($fila);
        }
        
        GenericoBD::desconectar($conexion);
        return $perfil;
    }
    
    public function obtenerPerfiles(){//obtener todos los perfiles
        
        $conexion= GenericoBD::conectar();
        
        $query="select * from perfil order by id";
        
        $rs=  mysql_query($conexion,$query) or die (mysql_error());
        $perfiles=NULL;
        
        if(mysql_num_rows($rs)>0){ 
            $perfiles=  GenericoBD::convertir_array($rs, "perfil");
        }
        
        GenericoBD::desconectar($conexion);
        return $perfiles;
    }
    
    public function obtenerPerfil($id_perfil){//obtener un perfil desde un id de perfil
        
        $conexion=  GenericoBD::conectar();
        
        $query="select * from perfil where id=".$id_perfil;
        
        $rs=  mysql_query($conexion,$query) or die (mysql_error());
        $perfil=NULL;
        
        if(mysql_num_rows($rs)==1){
            
            $fila=  mysql_fetch_assoc($rs);
            $perfil=new perfil($fila);
            
        }
        
        GenericoBD::desconectar($conexion);
        return $perfil;
        
    }
}

?>
