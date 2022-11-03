<?php
// Clase app de nuestra aplicación donde se añadirán todas las funciones.

class App {
    // Constructor de nuestra clase donde se creará un objeto que incluirá los siguientes datos:
    // name -> nombre aplicación
    public function __construct($name = "Aplicación para lista de deseos"){
      $this->name = $name;
    }

    // Función que obtendrá de la cabecera, con Get, el dato de la función a utilizar y lanzará la función llamada de esta misma clase
    // Por defecto, si no se le indica ninguna función, utilizará la función index()
    public function run(){
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
        } else {
            $method = "index";
        }
        $this->$method();
    }

    // Función indice: incluirá el código de pagina.php para poder leer las redirecciones a las funciones.
    public function index(){
       include('vistas/home.php');
    }

    public function colores(){
        include('vistas/colores.php');
    }
    
    public function cambio(){
        setcookie("color", $_GET["color"], strtotime("+1 day"), "/");
        header("Location: Index.php");
    }
    
}