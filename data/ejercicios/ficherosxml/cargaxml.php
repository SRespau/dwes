<?php
    $datos = simplexml_load_file("empleados.xml"); //Carga el fichero xml. Libreria por defecto en Visual Studio
    if($datos == false){
        echo "<br>No se ha podido leer el fichero xml";
        exit();//Termina por completo el script
    }
    echo "<h4>Muestro los datos del xml con print_r una vez cargado</h4>";
    print_r($datos);
    echo "<br>";
    echo "<br>Recorro el fichero con <b>foreach</b>: ";
    foreach($datos as $dato){
        print_r($dato);
    }
?>