<?php

//Comprobamos para cada input establecido si se le ha dado ha enviar, y si es correcto que confirme si el campo contiene datos.
//Si contiene datos devolverá el valor del input con un mensaje. Si no contiene devolverá un mensaje negativo.
if(isset($_GET["envio"])){
    if(!empty($_GET["nombre"])){
        echo "<br>El nombre del libro es: " . $_GET["nombre"];
    }
    else {
    echo "No has escrito ningún nombre de libro"; 
    }
}
if(isset($_GET["envio"])){
    if(!empty($_GET["autor"])){
        echo "<br>El nombre del autor es: " . $_GET["autor"];
    }
    else {
    echo "No has escrito ningún nombre de autor"; 
    }
}
if(isset($_GET["envio"])){
    if(!empty($_GET["editorial"])){
        echo "<br>El nombre de la editorial es: " . $_GET["editorial"];
    }
    else {
    echo "No has escrito ningún nombre de editorial"; 
    }
}
if(isset($_GET["envio"])){
    if(!empty($_GET["paginas"])){
        echo "<br>El número de páginas es: " . $_GET["paginas"];
    }
    else {
    echo "No has escrito ningún número de páginas"; 
    }
}
?>