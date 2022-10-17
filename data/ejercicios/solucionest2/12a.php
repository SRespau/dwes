<?php

if(isset($_GET["nombre"])){
    if(!empty($_GET["nombre"])){
        echo "<br>Hola " . $_GET["nombre"] . ", que tal estas";
    }
    else {
    echo "<h4>El campo nombre es obligatorio</h4>"; 
    echo "<a href='12.html'>Volver página anterior</a>";
    }
}

?>