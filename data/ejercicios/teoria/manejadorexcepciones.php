<?php
    class MiExcepcion extends Exception{
        public function errorPersonalizado(){
            $menserror = "Inormación del error: " . 
            "<br>Mensaje del error" . $this->getMessage() . //El $this es para coger el metodo de la clase Exception por herencia.
            "<br> Fichero que genera el error: " . $this->getFile() .
            "<br> Linea en la que se produce el error: " . $this->getLine();
        }
    }

?>