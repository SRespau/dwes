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

    //$infoUsuario = serialize([$_POST["idioma"], $_POST["coches"]]);

    $infoUsuario = json_encode([$_POST["idioma"], $_POST["coches"]]);
    setcookie("infoUsu", $infoUsuario, strtotime("+1 day"));

    if (isset($_POST['envio'])){
        if($_POST["idioma"] == "espaniol"){
            echo "<h3>Bienvenido querido usuario.</h3>";
            echo "--La marca de coche elegida es <b>" . $_POST["coches"] . "</b>--";
        }elseif($_POST["idioma"] == "ingles"){
            echo "<h3>Welcome dear user.</h3>";
            echo "--The car brand chosen is <b>" . $_POST["coches"] . "</b>--";
        }else{
            echo "<h3>Willkommen lieber benutzer.</h3>";
            echo "--Die gewählte Automarke ist <b>" . $_POST["coches"] . "</b>--";
        }
    }

    
?>