<?php

class rol {
    private $id_rol;
    private $nombre;
    private $descripcion;
    
    
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

            //datos rol
            $this->id_rol=$datos['id_rol'];
            $this->nombre=$datos['nombre'];
            $this->descripcion=$datos['descripcion'];
            
    }
//id_rol
    public function getIdrol(){
        return $this->id_rol;
    }
    
    public function setIdrol($id){
        $this->id_rol=$id;
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
}
?>
