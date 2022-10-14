<?php

if(isset($_GET["nombre"])){
    if(!empty($_GET["nombre"])){
        if(strlen($_GET["nombre"]) > 3){
            echo "<br>Hola " . $_GET["nombre"] . ", que tal estas";
        }else{
            header("Location: ejercicio3.html");
        }        
    }
    
}

?>