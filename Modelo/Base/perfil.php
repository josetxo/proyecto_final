<?php

class perfil {
    private $id;
    private $nombre;
    private $descripcion;
    private $serv_minimos;
    private $horas_anuales;
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
            $this->id=$datos['id'];
            $this->nombre=$datos['nombre'];
            $this->descripcion=$datos['descripcion'];
            $this->serv_minimos=$datos['serv_minimos'];
            $this->horas_anuales=$datos['horas_anuales'];
            
            $this->rol=NULL;
            
            
    }
    
//id_perfil
    public function getId_perfil(){
        return $this->id;
    }
    
    public function setId_perfil($id_perfil){
        $this->id=$id_perfil;
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
    
//horas anuales
    public function getHoras_anuales(){
        return $this->horas_anuales;
    }
    
    public function setHoras_anuales($horas_anuales){
        $this->horas_anuales=$horas_anuales;
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
