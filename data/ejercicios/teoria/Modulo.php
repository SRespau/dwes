<?php

class Modulo extends Asignatura{
    private $codigo = null;

    function __construct($nombre, $numerocreditos, $codigo){
        
        parent::__construct($nombre, $numerocreditos);
        $this->codigo = $codigo;
    }

    function getCodigo(){
        return $this->codigo;
    }
    
    function setCodigo($nuevocod){
        $this->codigo = $nuevocod;
    }

    function __toString(){
        return "<br><br> <h1>Datos del MODULO:</h1> <br><br> 
        Nombre del modulo: " . $this->getNombre() . 
        "<br> Numero de créditos: " . $this->getNumeroCreditos() . 
        "<br> Código del módulo: " . $this->codigo;
    }
}

?>