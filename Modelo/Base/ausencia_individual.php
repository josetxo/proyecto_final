<?php

class ausencia_individual {
    private $id_ausencia;
    private $fecha_inicio;
    private $fecha_fin;
//objeto trabajador
    private $trabajador;
//objeto tipo ausencia
    private $tipo_ausencia;
    
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

            //datos ausencia_individual
            $this->id_ausencia=$datos['id_ausencia'];
            $this->fecha_inicio=$datos['fecha_inicio'];
            $this->fecha_fin=$datos['fecha_fin'];
            
            $this->trabajador=NULL;
            $this->tipo_ausencia=NULL;
            
            
    }
//id_ausencia
    public function getId_ausencia(){
        return $this->id_ausencia;
    }
    
    public function setId_ausencia($id_ausencia){
        $this->id_ausencia=$id_ausencia;
    }
    
//fechainicio
    public function getFecha_inicio(){
        return $this->fecha_inicio;
    }
    
    public function setFecha_inicio($fecha_inicio){
        $this->fecha_inicio=$fecha_inicio;
    }
    
//fecha_fin
    public function getFecha_fin(){
        return $this->fecha_fin;
    }
    
    public function setFecha($fecha_fin){
        $this->fecha_fin=$fecha_fin;
    }
    
//objeto trabajador
    public function getTrabajador(){
        if($this->trabajador==NULL){
            self::setTrabajador(trabajador_bd::obtenerTrabajadorAusencia($this));
        }
        return $this->trabajador;
    }
    
    public function setTrabajador($trabajador){
        $this->trabajador=$trabajador;
    }
    
//objeto tipo_ausencia
    public function getTipo_ausencia(){
        if($this->tipo_ausencia==NULL){
            self::setTipo_ausencia(tipo_ausencia_bd::obtenerTipoAusenciaIndividual($this));
        }
        return $this->tipo_ausencia;
    }
    
    public function setTipo_ausencia($tipo_ausencia){
        $this->tipo_ausencia=$tipo_ausencia;
    }

}

?>
