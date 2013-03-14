<?php
require_once 'GenericoBD.php';

class sesion extends GenericoBD{
    function __construct(){//inicio la sesion
        session_start();
    }
    
    public static function set($nombre,$valor){//pongo nombre y valor en la sesion
        $_SESSION[$nombre] = $valor;
    }
    
    public function get($nombre) {//recupero el valor del nombre que nos pasa
        if (isset($_SESSION[$nombre])) 
        { 
            return $_SESSION[$nombre];
        } else {

            return false;
        }
    }
    
    public function borrar_variable($nombre){//borro la bariable de la sesion
        unset ($_SESSION[$nombre] ) ;
    }
    
    public function borrarsesion() {//borro la sesion
        $_SESSION = arrayO ;
        session_destroy();
    }
    
    public static function validarUsuario($dni,$pass){//valido el usuario
        
        $conexion=  GenericoBD::conectar();
        
        $query="select * from trabajador where dni='".$dni."' and pass='".$pass."'";
        
        $rs = mysql_query($query,$conexion) or die(mysql_error());
        $valido=FALSE;
        if(mysql_num_rows($rs)==1){
           $fila = mysql_fetch_assoc($rs);
           
           self::set("id_trabajador",$fila['id']);
           self::set("dni",$fila['dni']);
           self::set("username",$fila['nombre']);
           self::set("pass",$fila['pass']);
           $queryperfil="select * from perfil where id=(select id_perfil from trabajador where id='".self::get('id_trabajador')."')";
           $rsperfil=  mysql_query($queryperfil,$conexion) or die(mysql_error());
           if(mysql_num_rows($rsperfil)==1){
               $filaPerfil=  mysql_fetch_assoc($rsperfil);
               self::set("perfil", $filaPerfil['id']);
               switch (self::get('perfil')) {
                   case 0:
                       self::set("per", "administrador");
                       break;
                   case 1:
                       self::set("per", "jefe");
                       break;

                   default:
                       self::set("per", "trabajador");
                       break;
               }
               $valido=TRUE;
           }else{
               $valido=FALSE;
           }
         }else{
           echo"<br>no es un usuario <br><br>";
           
           $valido=FALSE;
         }           
        
        GenericoBD::desconectar($conexion);
        return $valido;
    }
    
}

?>
