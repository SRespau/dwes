<?php
// Clase app de nuestra aplicación donde se añadirán todas las funciones.
class App {
    // Constructor de nuestra clase donde se creará un objeto que incluirá los siguientes datos:
    // name -> nombre aplicación,  module -> modulo clase   student -> nombre del estudiante
    public function __construct($name = "mi aplicación con Cookies"){
      $this->name = $name;
      $this->module = "DAW";
      $this->student = "Sergio Respau";
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
       include('vistas/Pagina.php');
    }
  
    //Función login: Leera los datos de la cookie. Si no está vacio el campo "usuario" devolverá al index, por el contrario, si se encuentra
    // vacio, devolverá de nuevo a la pagina login.php para que se identifique. 
    public function login(){
        //El valor true en json_decode convierte el Objeto en un array asociativo
        if(!empty(json_decode($_COOKIE["DatosUser"], true)["Usuario"])){
            header("Location: ?method=index");
        }else{
            include('vistas/login.php');
        }        
    }

    //Autenticación: leerá el usuario y contraseña y los incluirá en un array.
    // Se creará una cookie que durará 1 dia. Se le insertará la array de datos con usuario y contraseña.
    // Al finalizar redirigirá al index.
    public function auth(){
        $datos = array(
            "Usuario" => $_POST["nombre"], 
            "Pass" => $_POST["pass"]);
        $cookie = json_encode($datos);
        setcookie("DatosUser", $cookie, strtotime("1+ day"));
        header("Location: ?method=index");
    }

    // Funcion logout: comprobará si existe la cookie con datos del usuario logeado. Si existe la borrará y redireccionará a login
    // En caso de no existir, mandará a login para que se identifique primero.
    public function logout(){
      if(isset($_COOKIE["DatosUser"])){
          setcookie("DatosUser", "", time() -1);
          header("Location: ?method=login");
      }else{
          header("Location: ?method=login");            
      }               
  }

}