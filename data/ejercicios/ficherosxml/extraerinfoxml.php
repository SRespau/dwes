<?php
    $datos = simplexml_load_file("empleados.xml"); //Carga el fichero xml. Libreria por defecto en Visual Studio
    $apellidos = $datos->xpath("//apellidos"); //Usamos simbologia xPath
    $edad = $datos->xpath("//edad");
    
    foreach($apellidos as $apellido){
        echo "<br> Apellido: ";
        print_r($apellido);
        
        //Info simple -> echo "<br> Apellido: " . $apellido;
    }

    foreach($edad as $edades){
        echo "<br> Edad: ";
        print_r($edades);
        
        //Info simple -> echo "<br> Edad: " . $edades;
    }


?>