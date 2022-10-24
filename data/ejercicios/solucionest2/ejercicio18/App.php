<?php

class App {

    public function __construct($name = "mi aplicación con Cookies"){
      $this->name = $name;
      $this->module = "DAW";
      $this->student = "Sergio Respau";
    }

    public function run(){
      if (isset($_GET['method'])) {
        $method = $_GET['method'];
      } else {
        $method = "index";
      }
      $this->$method();
    }

    public function index(){
       include('vistas/Pagina.php');
    }
  
    //Función login: Si hay un usuario actualmente logeado mandará al index. De lo contrario se abrirá la página de login
    public function login(){
        //El valor true en json_decode convierte el Objeto en un array asociativo
        if(!empty(json_decode($_COOKIE["DatosUser"], true)["Usuario"])){
            header("Location: ?method=index");
        }else{
            include('vistas/login.php');
        }        
    }
    
    public function auth(){
        $datos = array(
            "Usuario" => $_POST["nombre"], 
            "Pass" => $_POST["pass"]);
        $cookie = json_encode($datos);
        setcookie("DatosUser", $cookie, strtotime("1+ day"));
        header("Location: ?method=index");
    }

    public function logout(){
        $datos = array(
            "Usuario" => $_POST["nombre"], 
            "Pass" => $_POST["pass"]);
        $cookie = json_encode($datos);

        setcookie("DatosUser", $cookie, time() -1);
        header("Location: ?method=login");
    }

}