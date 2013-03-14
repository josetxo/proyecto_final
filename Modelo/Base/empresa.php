<?php


class empresa {
    private $nombre;
    private $nif;
    private $direccion;

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

            //datos empresa
            $this->nombre =$datos['nombre'];
            $this->nif=$datos['nif'];
            $this->direccion=$datos['direccion'];
            
            
    }
//nombre
    public function getNombre(){
        return $this->nombre;
    }
    
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    
//nif
    public function getNif(){
        return $this->nif;
    }
    
    public function setNif($nif){
        $this->nif=$nif;
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
