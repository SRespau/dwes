<?php

if(isset($_POST["envio"])){
    $infoUsuario = json_encode([$_POST["idioma"], $_POST["coches"]]);
    setcookie("infoUsu", $infoUsuario, strtotime("+1 day"));

    header ("location: ejercicio1Resultado.php");
    exit(); //Ponemos el comando de salir por si se salta el comando de la redireccion
}else{
    //Borrar las cookies y redirigir a la pagina principal por seguridad. Por si acceden manualmente a esta pagina para que no vean la cookie
    setcookie("infoUsu", "", time()-120);
    header ("location: ejercicio1Pagina.html");
    exit(); 
}