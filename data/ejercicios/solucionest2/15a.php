<?php
// Comprobamos que se ha pulsado el botón envio
    if(isset($_POST["envio"])){
    // Obtenemos los datos del array nombre de nuestra página html y lo metemos en una variable que se creará como array.     
        $arrayNombres = $_POST["nombre"];
        echo "El array de nombres es: ";
        //  Mostramos la array creada
        foreach ($arrayNombres as $nombre) {
            echo $nombre . " ";
        }
    }
?>