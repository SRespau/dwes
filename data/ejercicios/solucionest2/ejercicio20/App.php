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
       include('vistas/indice.php');
    }

    //Función login: Leera los datos de la cookie. Si no está vacio el campo "usuario" devolverá al index, por el contrario, si se encuentra
    // vacio, devolverá de nuevo a la pagina login.php para que se identifique. 
    public function login(){
        //El valor true en json_decode convierte el Objeto en un array asociativo
        if(!empty(json_decode($_COOKIE["DatosUser"], true)["Usuario"])){
            
            header("Location: ?method=home");
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
        
        header("Location: ?method=home");
    }

    // Función para visualizar la página home.php. Página con la lista de deseos.
    public function home(){       
       include('vistas/home.php');
    }

    // Función para añadir un nuevo elemento a la lista de deseos
    // Crearemos o nos añadiremos a la sesión actual activa, dependiendo la situación de la que proceda.
    // -Si la sesion con los datos está creada y se ha enviado un deseo obtendrá los datos guardados en la sesion, decodificará los datos en json y los guardará en una array como array asociativa (true)
    //  Leerá el campo de deseo nuevo, lo incluirá en la array, lo codificará en json y añadirá la array nueva a la sesion sustituyendo los datos anteriores
    // - Si la sesión no está creada comprobará si se ha enviado un deseo nuevo. Posteriormente creará una sesión añadiento el deseo nuevo.
    // Al finalizar redireccionará a la página de home.php
    public function new(){
        session_start();
        if(isset($_SESSION["listaDeseo"])){
            $lista2 = json_decode($_SESSION["listaDeseo"], true);
            $lista2[] = $_POST["nuevo_deseo"];            
            $_SESSION["listaDeseo"] = json_encode($lista2);

        }else{          
            $lista[] = $_POST["nuevo_deseo"];
            $_SESSION["listaDeseo"] = json_encode($lista);
        }       
        
        header("Location: ?method=home");
        
    }

    //Funcion para borrar un objeto de la lista por su número de identificativo en la lista ordenada.
    // Nos añadiremos a la sesión actual activa, dependiendo la situación de la que proceda. 
    //Decodificará los datos de la sesión en una array, borrara el valor elegido y reiniciará el index del array
    //Se codifican los datos en json y se añadirán a la sesion sobreescribiendo los datos de la sesión por los nuevos
    //Al finalizar redireccionará a la pagina de home.php

    public function delete(){
        session_start();
        if(isset($_SESSION["listaDeseo"]) && !empty($_POST["borrar_deseo"])){
            $lista = json_decode($_SESSION["listaDeseo"], true);
            unset($lista[$_POST["borrar_deseo"]-1]);
            $lista = array_values($lista);
            
            $_SESSION["listaDeseo"] = json_encode($lista);
            header("Location: ?method=home");
        }else{
            header("Location: ?method=home");
        }
    }

    // Función para borrar la lista de deseos entera
    // Si la sesion está creada sobrescribirá la array "listaDeseo" por una array vacía, borrando así los valores guardados.
    // Si no está creada porque no ha añadido ningún dato redireccionará a la misma página donde se encontraba
    public function empty(){
        session_start();
        if(isset($_SESSION["listaDeseo"])){

            $_SESSION["listaDeseo"] = json_encode(array());
            header("Location: ?method=home");
        }else{
            header("Location: ?method=home");
        }
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