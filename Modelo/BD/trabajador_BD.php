<?php
require_once 'GenericoBD.php';

class trabajador_BD extends GenericoBD{
    
    public function obtenerTrabajadores(){//obtener todos los trabajadores
        
        $conexion=  GenericoBD::conectar();
        
        $query="select * from trabajador";
        
        $rs=  mysql_query($query,$conexion) or die(mysql_error());
        $trabajadores=NULL;
        
        if(mysql_num_rows($rs)>0){
            
            $trabajadores=  GenericoBD::convertir_array($rs, "trabajador");
            
        }
        GenericoBD::desconectar($conexion);
        return $trabajadores;
    }
    
    public function obtenerTrabajadoresCentro($centro){//obtener todos los trabajadores de un centro
        
        $conexion=  GenericoBD::conectar();
        
        $query="select * from trabajador where id_centro=(select id from centro where id=".$centro->getId_centro().")";
        
        $rs=  mysql_query($query,$conexion) or die(mysql_error());
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
        
        $rs=  mysql_query($query,$conexion) or die(mysql_error());
        $trabajador=NULL;
        
        if(mysql_num_rows($rs)==1){
            $fila=  mysql_fetch_row($rs);
            $trabajador=new trabajador($fila);
        }
        
        GenericoBD::desconectar($conexion);
        return $trabajador;
    }
    
    public function obtenerTrabajadorAusencia($ausencia_individual){//obtener un trabajador desde una ausencia individual
        
        $conexion=  GenericoBD::conectar();
        
        $query="select * from trabajador where id=(select trabajador_id from ausencia_individual where id=".$ausencia_individual->getId_ausencia().")";
        
        $rs=  mysql_query($query,$conexion) or die(mysql_error());
        $trabajador=NULL;
        
        if(mysql_num_rows($rs)==1){
            $fila=  mysql_fetch_assoc($rs);
            $trabajador=new trabajador($fila);
        }

        GenericoBD::desconectar($conexion);
        return $trabajador;
    }
    
    public function obtenerTrabajadoresPerfil($perfil){//obtener todos los trabajadores de un perfil
        
        $conexion=  GenericoBD::conectar();
        
        $query="select * from trabajador where id_perfil=(select id from perfil where id=".$perfil->getId_perfil().")";
        
        $rs=  mysql_query($query,$conexion) or die(mysql_error());
        $trabajadores=NULL;
        
        if(mysql_num_rows($rs)>0){
            
            $trabajadores=  GenericoBD::convertir_array($rs, "trabajador");
            
        }
        GenericoBD::desconectar($conexion);
        return $trabajadores;
    }
    
    public static function eliminoTrabajador($trabajador){//eliminar un trabajador
    
    	
            
        $rs1=ausencia_individual_BD::EliminarAusenciasDeTrabajador($trabajador->getId_trabajador());
            if($rs1){
                $rs2=self::EliminarTrabajadorDeTrabajadores($trabajador);
                if($rs2){
                    return TRUE;
                }else{
                    return FALSE;
                }
            }else{
                return FALSE;
            }
        
            
       
    }
    
    public static function EliminarTrabajadorDeTrabajadores($trabajador)
    {
    	$conexion = GenericoBD::conectar();
    	
    	$query = "DELETE from trabajador WHERE id='".$trabajador->getId_trabajador()."'";
    	
    	$rs=mysql_query($query,$conexion) or die (mysql_error());
        if($rs){
            return TRUE;
        }else{
            return FALSE;
        }
        
    }
    
    public function ModificarTrabajador($trabajador)
    {
    	$conexion = GenericoBD::conectar();
    	
    	$encontrado = self::buscarTrabajadorPorDNI($trabajador->getDni());
        if($encontrado==FALSE){
            return FALSE;
        }else{
            $query="UPDATE `himevico`.`trabajador` SET 
                `id` = '".$trabajador->getId_trabajador()."', 
                `dni` =  '".$trabajador->getDni()."',
                `pass` = '".$trabajador->getPass()."', 
                `nombre` = '".$trabajador->getNombre()."', 
                `apellido1` = '".$trabajador->getApellido1()."', 
                `apellido2` = '".$trabajador->getApellido2()."', 
                `telefono` = '".$trabajador->getTelefono()."', 
                `id_perfil` = '".$trabajador->getPerfil()."', 
                `id_centro` = '".$trabajador->getCentro()."' 
                WHERE 
                `trabajador`.`id` = ".$trabajador->getId_trabajador().";";
            $rs=  mysql_query($query,$conexion) or die (mysql_error());

            if ($rs){
                    return TRUE;
                }else{
                    return FALSE;
                }
            
            }
    	
    }
    
    public function buscarTrabajadorPorDNI($dni)
    {
    	$conexion = GenericoBD::conectar();
    	
    	$query = "SELECT * FROM trabajador WHERE dni='".$dni."'";
    	$r = mysql_query($query,$conexion) or die (mysql_error());
    	
    	if(mysql_num_rows($r)>0)
    	{
    		$arrayregistro = mysql_fetch_assoc($r);
    		$trabajador = new Trabajador($arrayregistro);
    		
    		return $trabajador;
    	}
    	else
    	{
    		return false;
    	}
    }
    
    public static function insertar_trabajador($trabajador){//inserto un trabajador
    
        $conexion=  GenericoBD::conectar();
        //miro si esta el dni
        $compro=  self::buscarTrabajadorPorDNI($trabajador->getDni());
        if($compro){
            return FALSE;
        }else{
            $query="INSERT INTO `himevico`.`trabajador` (`id`, `dni`, `pass`, `nombre`, `apellido1`, `apellido2`, `telefono`, `id_perfil`, `id_centro`) VALUES (NULL, '".$trabajador->getDni()."', '".$trabajador->getPass()."', '".$trabajador->getNombre()."', '".$trabajador->getApellido1()."', '".$trabajador->getApellido2()."', '".$trabajador->getTelefono()."', '".$trabajador->getPerfil()."', '".$trabajador->getCentro()."');";
            $rs=  mysql_query($query,$conexion) or die(mysql_error());

            if ($rs){
                return TRUE;
            }else{
                return FALSE;
            }

        }
        
        
    }
}

?>
