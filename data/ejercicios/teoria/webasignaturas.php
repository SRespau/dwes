<?php

include_once "Asignatura.php"; //Similar al import. Tenemos que incluir la pagina php con la clase del objeto para que la pueda leer.
include_once "Modulo.php";

echo "<h1> WEB DE ASIGNATURAS</h1>";
    
$bbdd = new Asignatura("BBDD", 6);
Asignatura::setCiclo("DAM");//acceso atributo static 
echo "<br> Se ha creado la asignatura " . $bbdd->getNombre() . " con el num de creditos: " . $bbdd->getNumeroCreditos();
echo "<br> " . $bbdd; //Coge el toString de la clase en asignatura.php
echo "<br>BBDD pertenece al cliclo " . Asignatura::getCiclo();    
    
    
$dwes = new Modulo("DWES", 9, "IFC2040");
Modulo::setCiclo("DAW");
echo "<br> " . $dwes;//tengo el metodo toString
echo "<br>DWES pertenece al cliclo " . Modulo::getCiclo();

?>
