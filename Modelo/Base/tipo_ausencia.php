<?php 

class tipo_ausencia {
    private $id_tipo_ausencia;
    private $descripcion;
    private $color;
    
    
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

            //datos tipo_ausencia
            $this->id_tipo_ausencia=$datos['id_tipo_ausencia'];
            $this->descripcion=$datos['descripcion'];
            $this->color=$datos['color'];
            
            
    }
//id_tipo_ausencia
    public function getId_tipo_ausencia(){
        return $this->id_tipo_ausencia;
    }
    
    public function setId_tipo_ausencia($id_tipo_ausencia){
        $this->id_tipo_ausencia=$id_tipo_ausencia;
    }
    
//descripcion
    public function getDescripcion(){
        return $this->descripcion;
    }
    
    public function setDescripcion($descripcion){
        $this->descripcion=$descripcion;
    }
    
//color
    public function getColor(){
        return $this->color;
    }
    
    public function setColor($color){
        $this->color=$color;
    }

}

?>
