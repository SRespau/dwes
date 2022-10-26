<?php

class App {

    public function __construct($name = "Aplicación para lista de deseos"){
      $this->name = $name;
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
       include('vistas/indice.php');
    }

    public function login(){
        //El valor true en json_decode convierte el Objeto en un array asociativo
        if(!empty(json_decode($_COOKIE["DatosUser"], true)["Usuario"])){
            header("Location: ?method=home");
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
        if(!isset($_COOKIE["listaDeseo"])){
            $lista = ["perro", "gato"];
            setcookie("listaDeseo", json_encode($lista), strtotime("1+ week"));
        }
        header("Location: ?method=home");
    }

    public function home(){
       include('vistas/home.php');
    }

    public function new(){
        $lista = json_decode("listaDeseo", true);
        $lista = $_POST["nuevo_deseo"];
        $listaNueva = json_encode($lista);
        //Añadimos en el cuarto campo '/' para decirle que es el mismo path, asi lo sustituira y no creará otra
        setcookie("listaDeseo", $listaNueva, strtotime("+1 week"), '/');
        include('vistas/home.php');
    }

    public function delete($indice){

    }

    public function empty(){

    }


    public function logout(){
        if(isset($_COOKIE["DatosUser"])){
            setcookie("DatosUser", "", time() -1);
            header("Location: ?method=login");
        }else{
            header("Location: ?method=login");            
        }               
    }
    
}