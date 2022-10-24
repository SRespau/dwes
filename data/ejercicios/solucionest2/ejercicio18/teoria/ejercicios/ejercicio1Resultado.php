<?php
//Ejercicio
/*Crear web en la que selecciones entre 3 idiomas: español, ingles y aleman
y selecciones una marca de coches preferida y muestre el siguiente mensaje

    Bienvenido querido usuario. Español

    Welcome dear user. Ingles

    Willkmommen lieber Benutzer. Aleman

    y la marca de coche seleccionada

    Esta información se debe guardar en cookies. 
    Si no se selecciona idioma, por defecto será español.*/

    //$infoUsuario = serialize([$_POST["idioma"], $_POST["coches"]]); //Mucha información inutil. Mejor usar JSON
    if(isset($_COOKIE["infoUsu"])){

    
        //Decodificamos el array JSON de la cookie para que lo entienda php y elegimos la opcion correcta del array
        if(json_decode($_COOKIE["infoUsu"])[0] == "espaniol"){
            echo "<h3>Bienvenido querido usuario.</h3>";
            
            echo "--La marca de coche elegida es <b>" . json_decode($_COOKIE["infoUsu"])[1] . "</b>--"; 
        
        }elseif(json_decode($_COOKIE["infoUsu"])[0] == "ingles"){
            echo "<h3>Welcome dear user.</h3>";
            echo "--The car brand chosen is <b>" . json_decode($_COOKIE["infoUsu"])[1] . "</b>--";
        }else{
            echo "<h3>Willkommen lieber benutzer.</h3>";
            echo "--Die gewählte Automarke ist <b>" . json_decode($_COOKIE["infoUsu"])[1] . "</b>--";
        }
    }else{        
        echo "<h3>Debe seleccionar algunos datos</h3>";
        echo "<a href=ejercicio1Pagina.html>Volver al Inicio</a>";
    }

    
?>