<?php
/*
    CONCEPTOS GENERALES:
        - Sobrescritura (metodos)
            -> Mismo nombre con mismo número de parametros
                -> Clase figura -> metodo calcular_area
                -> Clase circulo -> metodo calcular_area
                -> Clase cuadrado -> metodo calcular_area

        - Sobrecarga (metodos)
            -> Mismo método con diferente número de parámetros o comportamiento

        - Sobrecarga (constructores)
            -> Diferentes constuctores con el mismo nombre y diferentes parámetros

        - Polimorfismo: objeto que se comporta como otro
            - Casting
            - A través de la sobreescritura y sobrecarga
            - Ligadura dinámica

    PHP:
        - Si existe la sobreescritura
        - No existe la sobrecarga
        - No hay sobrecarga de constructores
        - Si hay polimorfismo (sobreescritura)
        - public, private, protected. Por defecto es public (si no especificas tipo)

    NOTACION:
        - Nombre clases: UpperCamelCase (PascalCase)
        - Nombre métodos: lowerCamelCase
        - java: this.atributo     php: $this->atributo
*/

class Asignatura{ //Conviene inicializar las variables siempre
    private $nombre = null;
    private $numcreditos = null;

    private static $ciclo = null; //static, algo que va a pertenecer a la clase. No lo añadimos al constructor porque va a ser un atributo a secas

    public function __construct($nombre, $numcreditos){ //siempre es __construct
        $this->nombre = $nombre;
        $this->numcreditos = $numcreditos;
    }
    function getNombre(){
        return $this->nombre;
    }

    function setNombre($nombre){
        $this->nombre = $nombre;
    }
    

    function getNumeroCreditos(){
        return $this->numcreditos;
    }

    function setNumeroCreditos($numcreditos){
        $this->numcreditos = $numcreditos;
    }


    static function getCiclo(){
        return self::$ciclo; //cuando queremos acceder a algo estatico dentro de la clase "self::$atributo"
    }
   
    static function setCiclo($nomciclo){
        self::$ciclo = $nomciclo;
    }   

    function __toString(){
        return "<br><br> <h1>Datos de la ASIGNATURA:</h1> 
        <br><br> Nombre de la asignatura: " . $this->nombre . 
        "<br> Numero de créditos: " . $this->numcreditos;
    }

    
    
}//fin clase

?>