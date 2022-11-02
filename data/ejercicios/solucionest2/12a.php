<?php
// Comprobará si se ha pulsado el input enviar. Luego comprobará si el input de nombre está vacío o no.
//  - Si no está vacio enviará un mensaje con un saludo y el nombre introducido
//  - Si esta vacío aparecerá un mensaje con advertencia y un link para ir a la pantalla de introducción de nombre

if(isset($_GET["envio"])){
    if(!empty($_GET["nombre"])){
        echo "<br>Hola " . $_GET["nombre"] . ", que tal estas";
    }
    else {
    echo "<h4>El campo nombre es obligatorio</h4>"; 
    echo "<a href='12.html'>Volver página anterior</a>";
    }
}

?>