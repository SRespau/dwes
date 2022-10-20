<?php
if(isset($_post["envio"])){
    $infoUsuario = json_encode([$_POST["idioma"], $_POST["coches"]]);
    setcookie("infoUsu", $infoUsuario, strtotime("+1 day"));

    header("location: ejercicio1Resultado.php");
}
    

?>