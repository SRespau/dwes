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

    // Función index: incluirá el código de home.php para poder leer las redirecciones a las funciones posteriormente.
    public function index(){
       include('vistas/home.php');
    }

    // Función colores: incluirá la página colores.php para elegir el color que queremos de fondo de nuestar página
    public function colores(){
        include('vistas/colores.php');
    }
    
    // Función cambio: creará o modificará una sesión y le añadira el valor con el color seleccionado
    // Redireccionará a Index.php y comenzará de nuevo con el color nuevo cargado
    public function cambio(){
        session_start();
        $_SESSION["color"] = $_GET["color"];
        header("Location: Index.php");
    }
    
}