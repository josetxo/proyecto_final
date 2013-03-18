<?php


class centro {
    private $id_centro;
    private $descripcion;
    private $localizacion;
    private $horas_calendario;
//objeto empresa
    private $empresa;
    
    
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

            //datos centro
            $this->id_centro =$datos['id'];
            $this->descripcion=$datos['descripcion'];
            $this->localizacion=$datos['localizacion'];
            $this->horas_calendario=$datos['horas_calendario'];
            $this->empresa=NULL;
            
            
    }
//id_centro
    public function getId_centro(){
        return $this->id_centro;
    }
    
    public function setId_centro($id_centro){
        $this->id_centro=$id_centro;
    }
    
//descripcion
    public function getDescripcion(){
        return $this->descripcion;
    }
    
    public function setDescripcion($descripcion){
        $this->descripcion=$descripcion;
    }
    
//localizacion
    public function getLocalizacion(){
        return $this->localizacion;
    }
    
    public function setLocalizacion($localizacion){
        $this->localizacion=$localizacion;
    }
    
//horas_calendario
    public function getHoras_calendario(){
        return $this->horas_calendario;
    }
    
    public function setHoras_calendario($horas_calendario){
        $this->horas_calendario=$horas_calendario;
    }
    
//objeto empresa
    public function getEmpresa(){
        if($this->empresa==NULL){
            self::setEmpresa(empresa_bd::obtenerEmpresaCentro($this)); 
        }
        return $this->nif;
    }
    
    public function setEmpresa($empresa){
        $this->empresa=$empresa;
    }


}

?>
