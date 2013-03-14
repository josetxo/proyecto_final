<?php
require_once 'GenericoBD';
require_once 'Modelo/Base/paquete_base.php';
require_once 'ausencia_individual_BD.php';

class trabajador_BD extends GenericoBD{
    
    public function obtenerTrabajadores(){//obtener todos los trabajadores
        
        $conexion=  GenericoBD::conectar();
        
        $query="select * from trabajador";
        
        $rs=  mysql_query($query,$conexion) or die(mysql_error());
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
        
        $rs=  mysql_query($query,$conexion) or die(mysql_error());
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
        
        $rs=  mysql_query($query,$conexion) or die(mysql_error());
        $trabajadores=NULL;
        
        if(mysql_num_rows($rs)>0){
            
            $trabajadores=  GenericoBD::convertir_array($rs, "trabajador");
            
        }
        GenericoBD::desconectar($conexion);
        return $trabajadores;
    }
    
    public function eliminarTrabajador($dni)
    {
    	$conexion = GenericoBD::conectar();
    	
    	$query = "SELECT * FROM trabajador WHERE dni='".$dni."'";
    	$r = mysql_query($query,$conexion) or die (mysql_error());
    	
    	if(mysql_num_rows($r)>0)
    	{
    		$arrayregistro = mysql_fetch_assoc($r);
    		
            $trabajador = new Trabajador($arrayregistro);
            
            EliminarAusenciasDeTrabajador($trabajador->getId());
            
            self::EliminarTrabajadorDeTrabajadores($trabajador->getId());
            
            return true;
        }
        else
        {
        	return false;
        }
    }
    
    public function EliminarTrabajadorDeTrabajadores($id)
    {
    	$conexion = GenericoBD::conectar();
    	
    	$query = "DELETE from trabajador WHERE id='".$id."'";
    	
    	mysql_query($query,$conexion) or die (mysql_error());
    }
    
    public function ModificarTrabajador($dni)
    {
    	$conexion = GenericoBD::conectar();
    	
    	$trabajador = self::buscarTrabajadorPorDNI($dni);
    	
    	
    }
    
    public function buscarTrabajadorPorDNI($dni)
    {
    	$conexion = GenericoBD::conectar();
    	
    	$query = "SELECT * FROM trabajador WHERE dni='".$dni."'";
    	$r = mysql_query($query,$conexion) or die (mysql_error());
    	
    	if(mysql_num_rows($r)>0)
    	{
    		$arrayregistro = mysql_fetch_assoc($r);
    		$trabajador = new Trabajador();
    		
    		return $trabajador;
    	}
    	else
    	{
    		return false;
    	}
    }
}

?>
