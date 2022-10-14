<?php

    include_once "manejadorexcepciones.php"; //Importamos nuestra clase con excepción personalizada

//Calcula el inverso del número pasado por parámetro
function inverso($num){
    if($num == 0){
        //throw new Exception ("No se puede dividir por cero");
        throw new MiExcepcion ("No se puede dividir por cero");
    }
    return 1/$num;
}

//En try ponemos el codigo a evaluar
try{
    echo "<br>El inverso del número 5 es: " . inverso(5);
}catch(Exception $e){ //Trato la excepción y la meto en una variable. Solo hay exception en php
    echo "<br>La razón del a excepción es: " . $e->getMessage(); //Exception es una clase con varios metodos. getMessage es uno
}finally{//El bloque finally siempre se ejecuta salte la excepción o no
    echo "<br>Esto siempre se ejecuta";
}

//Prueba para que salte la excepción
/*
try{
    echo "<br>El inverso del número 5 es: " . inverso(0);
}catch(MiExcepcion $e){ 
    echo "<br>La razón del a excepción es: " . $e->errorPersonalizado(); //funcion de la clase personalizada y la funcion errorPersonalizado
}finally{
    echo "<br>Esto siempre se ejecuta";
}*/


?>