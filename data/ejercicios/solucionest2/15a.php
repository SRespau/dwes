<?php
    if(isset($_POST["envio"])){
        
        $arrayNombres = $_POST["nombre"];
        echo "El array de nombres es: ";
        
        foreach ($arrayNombres as $nombre) {
            echo $nombre . " ";
        }
    }
?>