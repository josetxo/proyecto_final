<?php
require_once 'GenericoBD.php';

class sesion extends GenericoBD{
    function __construct(){//inicio la sesion
        session_start();
    }
    
    public function set($nombre,$valor){//pongo nombre y valor en la sesion
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
           
           set("id_trabajador",$fila['id']);
           set("dni",$fila['dni']);
           set("pass",$fila['pass']);
           $valido=TRUE;
         }else{
           echo"<br>no es un usuario <br><br>";
           $valido=FALSE;
         }           
        
        GenericoBD::desconectar($conexion);
        return $valido;
    }
    
}

?>
