<?php
session_start();

if(isset($_SESSION["rol"])){
    if($_SESSION["rol"] == 0){
        echo "Bienvenido usuario" ;
    }elseif($_SESSION["rol"] == 1){
        echo "Bienvenido <b>admin</b>";
    }else{
        header("Location: login.php");
    }
}

echo "<br><br> <a href='logout.php'>Logout</a>";