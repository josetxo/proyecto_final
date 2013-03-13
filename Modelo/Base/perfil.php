<?php

class perfil {
    private $id_perfil;
    private $nombre;
    private $descripcion;
    private $serv_minimos;
//objeto rol
    private $rol;
    
    
    
    public function __construct()
    {
        $args = func_get_args();
        $nargs = func_num_args();
        switch($nargs) {

                case 1:
                        $this->__construct1($args[0]);
                        break;
        }
    }

    public function __construct1($datos)
    {

            //datos perfil
            $this->id_perfil=$datos['id_perfil'];
            $this->nombre=$datos['nombre'];
            $this->descripcion=$datos['descripcion'];
            $this->serv_minimos=$datos['serv_minimos'];
            
            $this->rol=NULL;
            
            
    }
    
//id_perfil
    public function getId_perfil(){
        return $this->id_perfil;
    }
    
    public function setId_perfil($id_perfil){
        $this->id_perfil=$id_perfil;
    }
    
//nombre
    public function getNombre(){
        return $this->nombre;
    }
    
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    
//descripcion
    public function getDescripcion(){
        return $this->descripcion;
    }
    
    public function setDescripcion($descripcion){
        $this->descripcion=$descripcion;
    }
    
//serv_minimos
    public function getServ_minimos(){
        return $this->serv_minimos;
    }
    
    public function setServ_minimos($Serv_minimos){
        $this->serv_minimos=$Serv_minimos;
    }
    
//objeto rol
    public function getRol(){
        if ($this->rol==NULL){
            self::setRol(rol_bd::obtenerRolPerfil($this));
        }
        return $this->id_rol;
    }
    
    public function setRol($rol){
        
        $this->rol=$rol;
    }


}

?>
