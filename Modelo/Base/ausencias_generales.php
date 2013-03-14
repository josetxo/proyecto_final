<?php


class ausencias_generales {
    private $id_ausencia_general;
    private $fecha_inicio;
    private $fecha_fin;
//objeto centro
    private $centro;
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

            //datos ausencias generales
            $this->id_ausencia_general =$datos['id_ausencia_general'];
            $this->fecha_inicio=$datos['fecha_inicio'];
            $this->fecha_fin=$datos['fecha_fin'];
            $this->centro_id=NULL;
            $this->tipo_ausencia_id=NULL;
            
            
            
            
    }
//id_ausencia_general
    public function getId_ausencia_general(){
        return $this->id_ausencia_general;
    }
    
    public function setId_ausencia_general($id_ausencia_general){
        $this->id_ausencia_general=$id_ausencia_general;
    }
    
//fecha_inicio
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
    
    public function setFecha_fin($fecha_fin){
        $this->fecha_fin=$fecha_fin;
    }
    
//objeto centro
    public function getCentro(){
        if($this->centro==NULL){
            self::setCentro(centro_bd::obtenerCentroAusencia($this));
        }
        return $this->centro;
    }
    
    public function setCentro($centro){
        $this->centro=$centro;
    }
    
//tipo_ausencia_id
    public function getTipo_ausencia(){
        if($this->tipo_ausencia==NULL){
            self::setTipo_ausencia(tipo_ausencia_bd::obetenerTipoAusenciaGeneral($this));
        }
        return $this->tipo_ausencia;
    }
    
    public function setTipo_ausencia($tipo_ausencia){
        $this->tipo_ausencia=$tipo_ausencia;
    }

}

?>
