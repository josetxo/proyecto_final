<?php


class trabajador {
    private $id_trabajador;
    private $dni;
    private $pass;
    private $nombre;
    private $apellido1;
    private $apellido2;
    private $telefono;
//objeto perfil
    private $perfil;
//objeto centro
    private $centro;
    
    
    
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

            //datos trabajador
            $this->id_trabajador =$datos['id_trabajador'];
            $this->dni=$datos['dni'];
            $this->pass=$datos['pass'];
            $this->nombre=$datos['nombre'];
            $this->apellido1=$datos['apellido1'];
            $this->apellido2=$datos['apellido2'];
            $this->telefono=$datos['telefono'];
            
            $this->perfil=NULL;
            $this->centro=NULL;
            
            
    }
    
//id_trabajador
    public function getId_trabajador(){
        return $this->id_trabajador;
    }
    
    public function setId_trabajador($id_trabajador){
        $this->id_trabajador=$id_trabajador;
    }
    
//dni
    public function getDni(){
        return $this->dni;
    }
    
    public function setDni($dni){
        $this->dni=$dni;
    }
    
//pass
    public function getPass(){
        return $this->pass;
    }
    
    public function setPass($pass){
        $this->pass=$pass;
    }
    
//nombre
    public function getNombre(){
        return $this->nombre;
    }
    
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    
//apellido1
    public function getApellido1(){
        return $this->apellido1;
    }
    
    public function setApellido1($apellido1){
        $this->apellido1=$apellido1;
    }
    
//apellido2
    public function getApellido2(){
        return $this->apellido2;
    }
    
    public function setApellido2($apellido2){
        $this->apellido2=$apellido2;
    }
    
//telefono
    public function getTelefono(){
        return $this->telefono;
    }
    
    public function setTelefono($telefono){
        $this->telefono=$telefono;
    }
    
//id_perfil
    public function getPerfil(){
        if($this->perfil==NULL){
            self::setPerfil(perfil_bd::obtenerPerfilTrabajador($this));
            
        }
        return $this->perfil;
    }
    
    public function setPerfil($perfil){
        $this->perfil=$perfil;
    }
    
//id_centro
    public function getCentro(){
        if($this->centro==NULL){
            self::setCentro(centro_bd::obtenerCentroTrabajador($this));
        }
        return $this->centro;
    }
    
    public function setCentro($centro){
        $this->centro=$centro;
    }


}

?>
